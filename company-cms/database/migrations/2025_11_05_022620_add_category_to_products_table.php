<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Menambahkan kolom 'category' setelah kolom 'status' (opsional, untuk kerapihan)
            // Tipe data 'string' (varchar) sangat umum digunakan.
            $table->string('category')->nullable()->after('status'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Untuk rollback, hapus kolom 'category'
            $table->dropColumn('category');
        });
    }
};