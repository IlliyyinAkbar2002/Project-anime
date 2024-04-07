<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * namaFilm
    slug
    rating
    genre
    tahun
    deskripsi
    image
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
