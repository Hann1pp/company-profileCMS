<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    // Nama tabel di database
    protected $table = 'projects';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'description',
        'client_name',
        'year',
        'thumbnail', 
        'status', // Kolom ini sudah benar dan sesuai dengan migration
    ];

    // Kolom yang harus dikonversi ke tipe data tertentu
    // 'is_featured' telah dihapus karena kita menggunakan kolom 'status' (string)
    // Jika Anda menambahkan kolom lain yang butuh casting, masukkan di sini.
    // Untuk saat ini, kita biarkan array ini kosong.
    protected $casts = [
        //
    ];
}
