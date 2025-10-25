<?php

namespace App\Http\Controllers\Client;

use App\Models\Partner; // Import Model Partner agar bisa digunakan
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // Import ini tetap diperlukan meskipun method index tidak menggunakannya

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama (Home Page).
     * Memuat data partner yang aktif untuk ditampilkan.
     */
    public function index()
    {
        // Pilihan 1: Menggunakan kolom is_active (Disarankan, karena boolean)
        // Ambil partner yang statusnya aktif (is_active = 1/true).
        $partners = Partner::where('is_active', true)->orderBy('name')->get();
        
        /* // Pilihan 2: Jika Anda menggunakan kolom status string (kurang disarankan, tapi sesuai screenshot)
        // Jika kolom di DB adalah 'status' dan nilainya adalah string 'Aktif', gunakan:
        $partners = Partner::where('status', 'Aktif')->orderBy('name')->get(); 
        */

        // Kirim data 'partners' ke view 'client.home'
        return view('client.home', compact('partners')); 
    }
}