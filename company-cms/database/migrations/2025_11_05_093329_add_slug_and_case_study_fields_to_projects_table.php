<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan perubahan ke database.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Kolom slug unik (untuk URL)
            if (!Schema::hasColumn('projects', 'slug')) {
                $table->string('slug')->nullable()->unique()->after('title');
            }

            // Kolom tambahan untuk studi kasus
            if (!Schema::hasColumn('projects', 'challenge')) {
                $table->longText('challenge')->nullable()->after('description');
            }
            if (!Schema::hasColumn('projects', 'solution')) {
                $table->longText('solution')->nullable()->after('challenge');
            }
            if (!Schema::hasColumn('projects', 'result')) {
                $table->longText('result')->nullable()->after('solution');
            }
        });
    }

    /**
     * Rollback perubahan (jika dibatalkan).
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['slug', 'challenge', 'solution', 'result']);
        });
    }
};
