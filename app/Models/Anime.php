<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Run the migrations.
 * namaFilm
    slug
    rating
    genre
    tahun
    deskripsi
 */

class Anime extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'namaFilm',
        'slug',
        'rating',
        'genre',
        'tahun',
        'deskripsi',
        'image'
    ];
}
