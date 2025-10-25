<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Wajib import Model User
use Illuminate\Support\Facades\Hash; // Wajib import Hash

class AdminUserSeeder extends Seeder
{
    /**
     * Jalankan seed database.
     *
     * @return void
     */
    public function run()
    {
        // Buat satu akun Admin Utama
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            // GANTI 'strong_password_anda' dengan kata sandi yang Anda inginkan
            'password' => Hash::make('12345678'), 
        ]);
    }
}