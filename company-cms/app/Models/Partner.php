<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Accessor untuk mendapatkan URL lengkap dari gambar partner.
     * Mengembalikan FULL URL, sehingga di View TIDAK perlu lagi menggunakan asset().
     */
    public function getImageAttribute($value)
    {
        // Jika kolom image di DB kosong
        if (empty($value)) {
            return 'https://placehold.co/150x80/9ca3af/ffffff?text=Logo+Empty';
        }

        // 1. Definisikan folder penyimpanan (sesuai PartnerController)
        $storageFolder = 'partners/'; 
        
        // 2. Kita asumsikan nilai DB sudah berupa path relatif yang bersih (misalnya 'partners/dbs.png')
        $pathToCheck = $value;
        
        // Cek jika nilai DB hanya nama file (misalnya 'dbs.png'), kita tambahkan prefix folder.
        if (!str_contains($value, '/')) {
            $pathToCheck = $storageFolder . $value;
        }

        // Cek 1: Apakah file ada di path yang sudah diprediksi (misalnya 'partners/dbs.png')
        if (Storage::disk('public')->exists($pathToCheck)) {
            // Jika ditemukan, kembalikan URL lengkap
            return asset('storage/' . $pathToCheck);
        }
        
        // Cek 2 (Fallback): Coba cek nilai DB apa adanya, jika mungkin sudah termasuk folder 
        // yang berbeda atau path yang lebih kompleks.
        if (Storage::disk('public')->exists($value)) {
             return asset('storage/' . $value);
        }

        // Jika semua pengecekan gagal, kembalikan placeholder Error.
        return 'https://placehold.co/150x80/9ca3af/ffffff?text=Logo+Error';
    }
}