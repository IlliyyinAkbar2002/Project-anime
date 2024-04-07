@extends('layouts.main')

<!--
namaFilm
slug
rating
genre
tahun
deskripsi
image
*-->


@section('content')
<div class="container">
    <h1>Create</h1>
    <p>This is the create page.</p>
    <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="namaFilm">Nama Film</label>
            <input type="text" class="form-control" id="namaFilm" name="namaFilm">
        </div>
        <div class="mb-3">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="mb-3">
            <label for="rating">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating">
        </div>
        <div class="mb-3">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
        </div>
        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('crud/home')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection