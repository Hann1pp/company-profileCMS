<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * Semua kolom yang boleh diisi melalui Project::create() atau $project->update().
     */
    protected $fillable = [
        'title',
        'slug',         // <--- ADA
        'client_name',
        'year',
        'category',     // <--- ADA
        'description',
        'thumbnail',
        'status',
        'challenge',    // <--- ADA
        'solution',     // <--- ADA
        'result',       // <--- ADA
    ];
}