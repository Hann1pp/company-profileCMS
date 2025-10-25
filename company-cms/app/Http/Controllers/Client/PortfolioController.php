<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Project; 
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Menampilkan daftar project untuk halaman portofolio, difilter berdasarkan status.
     */
    public function index()
    {
        // KODE FINAL: Filter hanya proyek yang diset untuk tampil di publik
        $projects = Project::whereIn('status', ['Regular', 'Unggulan']) 
                           ->orderBy('year', 'desc')
                           ->get();

        return view('client.portofolio', compact('projects'));
    }
}
