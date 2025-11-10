<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable(); // Menjadikan deskripsi nullable untuk menghindari error saat tidak diisi
            $table->string('client_name')->nullable();
            $table->year('year');
            $table->string('thumbnail')->nullable();
            $table->string('category')->nullable()->after('thumbnail');
            
            // Perubahan Krusial: Mengganti is_featured menjadi status
            $table->string('status')->default('Regular'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
