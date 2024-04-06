<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * namaFilm
    slug
    rating
    genre
    tahun
    deskripsi
     */
    public function up(): void
    {
        Schema::create('anime', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->string('namaFilm');
            $table->string('slug');
            $table->string('rating');
            $table->string('genre');
            $table->string('tahun');
            $table->string('deskripsi');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
