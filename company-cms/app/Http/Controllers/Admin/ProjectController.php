<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // Tambahkan ini untuk helper slug

class ProjectController extends Controller
{
    /**
     * Menampilkan daftar semua project di dashboard Admin dengan pagination.
     */
    public function index()
    {
        // Menggunakan paginate() agar method links() berfungsi di view
        $projects = Project::orderBy('year', 'desc')->paginate(10);
        
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Menampilkan form untuk membuat project baru.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Menyimpan project baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'client_name' => 'nullable|string|max:255',
            // Revisi: 'year' dibuat required dan integer. Sesuaikan dengan skema database jika NOT NULL.
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 5), 
            'description' => 'required|string', // Revisi: Deskripsi dibuat required.
            // Revisi: 'thumbnail' dibuat required untuk pembuatan project baru.
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            // Revisi: Mengubah validasi menjadi 'boolean' yang lebih aman untuk nilai 0/1.
            'is_featured' => 'nullable|boolean', 
            // ASUMSI: Anda juga mungkin punya field 'category', 'challenge', 'solution', 'result'
            'category' => 'nullable|string|max:255',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'result' => 'nullable|string',
        ]);

        // 2. LOGIKA SLUG
        // Slug dibuat otomatis dari title
        $slug = Str::slug($validatedData['title']);
        $count = Project::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validatedData['slug'] = $slug;


        // 3. Menentukan Status dan Thumbnail
        
        // Status: Jika is_featured = 1, status = 'Unggulan', jika tidak = 'Regular'
        $validatedData['status'] = $request->input('is_featured') == 1 ? 'Unggulan' : 'Regular';
        
        // Hapus is_featured dari data untuk di-insert/update karena tidak ada di kolom database
        unset($validatedData['is_featured']); 

        // Upload Thumbnail
        if ($request->hasFile('thumbnail')) {
            // Path penyimpanan: 'thumbnails/projects/namafile.ext'
            // Nilai ini akan langsung disimpan ke kolom 'thumbnail' di database.
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails/projects', 'public');
        }

        // 4. Menyimpan ke database
        Project::create($validatedData);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit project yang ada.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Memperbarui project di database.
     */
    public function update(Request $request, Project $project)
    {
        // 1. Validasi data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'client_name' => 'nullable|string|max:255',
            // Revisi: 'year' dibuat required dan integer.
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 5),
            'description' => 'required|string', // Revisi: Deskripsi dibuat required.
            // Revisi: 'thumbnail' dibuat nullable untuk update.
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            // Revisi: Mengubah validasi menjadi 'boolean' yang lebih aman untuk nilai 0/1.
            'is_featured' => 'nullable|boolean', 
            // ASUMSI: Anda juga mungkin punya field 'category', 'challenge', 'solution', 'result'
            'category' => 'nullable|string|max:255',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'result' => 'nullable|string',
        ]);
        
        // 2. LOGIKA SLUG (Hanya generate jika judul berubah dan/atau slug belum ada)
        if ($validatedData['title'] !== $project->title || empty($project->slug)) {
            $slug = Str::slug($validatedData['title']);
            // Pastikan slug unik, kecuali untuk dirinya sendiri
            $count = Project::where('slug', $slug)->where('id', '!=', $project->id)->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $validatedData['slug'] = $slug;
        }


        // 3. Menentukan Status
        $validatedData['status'] = $request->input('is_featured') == 1 ? 'Unggulan' : 'Regular';
        unset($validatedData['is_featured']); 

        // 4. Mengupload Thumbnail Baru
        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama jika ada
            if ($project->thumbnail) {
                // Path di DB sudah lengkap (misal: thumbnails/projects/oldfile.jpg), 
                // jadi kita bisa langsung menghapusnya.
                Storage::disk('public')->delete($project->thumbnail);
            }
            
            // Simpan file baru
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails/projects', 'public');
        } else {
             // PENTING: Jika tidak ada file baru, kita HILANGKAN key 'thumbnail' dari $validatedData
             // agar Eloquent tidak mencoba mengupdate nilai menjadi NULL.
             unset($validatedData['thumbnail']);
        }
        
        // 5. Memperbarui database
        $project->update($validatedData);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diperbarui.');
    }

    /**
     * Menghapus project dari database.
     */
    public function destroy(Project $project)
    {
        // Hapus file fisik dari storage menggunakan path lengkap dari database
        if ($project->thumbnail) {
            Storage::disk('public')->delete($project->thumbnail);
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus.');
    }
}