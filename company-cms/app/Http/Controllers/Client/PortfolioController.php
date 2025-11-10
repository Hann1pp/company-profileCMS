<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Menampilkan daftar project untuk halaman portofolio (publik).
     */
    public function index()
    {
        $projects = Project::whereIn('status', ['Regular', 'Unggulan'])
                           ->orderBy('year', 'desc')
                           ->paginate(8); 

        // Nama view ASLI Anda (Jika Anda tidak mengubah struktur folder)
        // Jika struktur folder Anda adalah client/products/, GANTI dengan view('client.products.portfolio', ...)
        return view('client.portofolio', compact('projects'));
    }

    /**
     * Menampilkan detail studi kasus berdasarkan slug proyek.
     */
    public function show(string $slug)
    {
        // Menggunakan firstOrFail() untuk menangani 404
        $project = Project::where('slug', $slug)
                          ->whereIn('status', ['Regular', 'Unggulan'])
                          ->firstOrFail(); 

        $relatedProjects = Project::whereIn('status', ['Regular', 'Unggulan'])
                                  ->where('id', '!=', $project->id)
                                  ->orderBy('year', 'desc')
                                  ->take(4)
                                  ->get();

        // Nama view ASLI Anda (Jika Anda tidak mengubah struktur folder)
        // Jika struktur folder Anda adalah client/products/, GANTI dengan view('client.products.project-detail', ...)
        return view('client.project-detail', compact('project', 'relatedProjects'));
    }
}