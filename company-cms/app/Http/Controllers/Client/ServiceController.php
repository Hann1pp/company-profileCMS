<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; // Pastikan model Product di-import

class ServiceController extends Controller
{
    /**
     * Tampilkan halaman Solusi Unggulan Kami (/services).
     * Memuat data produk yang aktif untuk ditampilkan per kategori.
     */
    public function index()
    {
        // 1. Ambil semua produk yang statusnya 'aktif' (is_active = true)
        $products = Product::where('is_active', true) 
                           ->get();
        
        // 2. Kelompokkan produk berdasarkan kolom kategori
        $groupedProducts = $products->groupBy('category');

        // Kirim data produk yang sudah dikelompokkan ke view
        return view('client.services', [
            'products' => $groupedProducts
        ]);
    }
}