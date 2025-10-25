<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service; 
use Illuminate\Support\Facades\Session; 

class ServiceController extends Controller
{
    /**
     * Menampilkan daftar semua Layanan.
     */
    public function index()
    {
        // Ambil semua data layanan dari database
        $services = Service::all(); 

        // Kirim data ke view index
        return view('admin.services.index', compact('services'));
    }

    /**
     * Menampilkan form untuk membuat Layanan baru.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Menyimpan Layanan baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi Data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // is_active tidak perlu divalidasi 'required' karena nilainya akan ditangani secara terpisah
        ]);

        // 2. Simpan Data
        $service = Service::create([
            'title' => $request->title,
            'description' => $request->description,
            // LOGIKA PENTING UNTUK CHECKBOX:
            // Jika checkbox 'is_active' ada (dicentang), nilainya 1 (true).
            // Jika checkbox tidak ada (tidak dicentang), nilainya 0 (false).
            'is_active' => $request->has('is_active') ? 1 : 0, 
        ]);

        // 3. Redirect dengan pesan sukses
        Session::flash('success', 'Layanan "' . $service->title . '" berhasil ditambahkan!');
        return redirect()->route('admin.services.index');
    }

    /**
     * Menampilkan form untuk mengedit Layanan tertentu.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Memperbarui Layanan di database.
     */
    public function update(Request $request, $id)
    {
        // 1. Cari Layanan
        $service = Service::findOrFail($id);

        // 2. Validasi Data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // 3. Update Data
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            // LOGIKA PENTING UNTUK CHECKBOX PADA UPDATE:
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        // 4. Redirect dengan pesan sukses
        Session::flash('success', 'Layanan "' . $service->title . '" berhasil diperbarui!');
        return redirect()->route('admin.services.index');
    }

    /**
     * Menghapus Layanan dari database.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $title = $service->title;
        $service->delete();

        Session::flash('error', 'Layanan "' . $title . '" berhasil dihapus.');
        return redirect()->route('admin.services.index');
    }
}
