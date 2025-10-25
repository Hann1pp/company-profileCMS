<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->paginate(10);
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Menyimpan partner baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Memastikan nama unik kecuali untuk diri sendiri (walaupun ini 'store', tapi ini praktik yang baik)
            'name' => 'required|string|max:255|unique:partners,name',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'is_active' => 'nullable',
        ]);

        // Mengambil boolean dari input
        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            // Simpan file ke storage/app/public/partners
            // Path yang dikembalikan adalah 'partners/nama_file.ext'
            $path = $request->file('image')->store('partners', 'public');

            // Simpan path relatif yang bersih (partners/nama_file.ext)
            $validated['image'] = $path;
            
            // CATATAN: Baris 'str_replace('public/', '', $path);' tidak diperlukan
            // karena store() dengan disk 'public' sudah mengembalikan path yang benar.
        }

        Partner::create($validated);

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil ditambahkan!');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Memperbarui partner yang sudah ada.
     */
    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            // Pengecualian ID saat validasi unique
            'name' => 'required|string|max:255|unique:partners,name,' . $partner->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'is_active' => 'nullable',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            // 1. Hapus gambar lama jika ada
            if ($partner->image) {
                // Gunakan Helper Storage::delete() untuk kepraktisan
                Storage::disk('public')->delete($partner->image); 
            }

            // 2. Simpan gambar baru
            $path = $request->file('image')->store('partners', 'public');
            
            // 3. Update path gambar di data yang akan divalidasi
            $validated['image'] = $path;
            
            // CATATAN: Baris 'str_replace('public/', '', $path);' juga tidak diperlukan di sini.
        } else {
            // JANGAN HAPUS, agar gambar lama tetap dipertahankan jika tidak ada file baru diupload.
            unset($validated['image']); 
        }

        $partner->update($validated);

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil diperbarui!');
    }

    /**
     * Menghapus partner dari database dan file gambarnya.
     */
    public function destroy(Partner $partner)
    {
        // Hapus file gambar dari storage
        if ($partner->image) {
            Storage::disk('public')->delete($partner->image);
        }

        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil dihapus!');
    }
}