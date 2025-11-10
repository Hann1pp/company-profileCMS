<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    // Sesuaikan dengan skema tabel products Anda
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'price',
        'image',
        'is_active',
        'category', // REVISI: Kolom Kategori ditambahkan
    ];

    // Opsional: Cast is_active sebagai boolean
    protected $casts = [
        'is_active' => 'boolean',
    ];
}