<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    // Ini adalah langkah KRUSIAL. Tanpa ini, Laravel akan memblokir 
    // pengisian massal (mass assignment) dan data Anda (title, description)
    // mungkin tidak terkirim ke database, menyebabkan error NOT NULL.
    protected $fillable = [
        'title', 
        'description', 
        'is_active',
        // Tambahkan kolom lain di sini jika ada, seperti 'slug' atau 'icon'
    ];

    // Jika Anda menggunakan Model Guarded:
    // protected $guarded = []; // Gunakan ini jika Anda ingin mengizinkan semua kolom diisi (kurang disarankan)

    /**
     * Pastikan nama tabel benar jika berbeda dari 'services'.
     * protected $table = 'nama_tabel_anda'; 
     */
}
