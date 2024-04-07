@extends('layouts.main')


@section('content')
<div class="container">
    <h1>Update</h1>
    <p>This is the update page.</p>
    <form action="{{ route('crud.update', ['anime' => $anime->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="namaFilm" class="form-label">Nama Film</label>
            <input type="text" class="form-control" id="namaFilm" name="namaFilm" value="{{ $anime->namaFilm }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $anime->slug }}">
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ $anime->rating }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $anime->genre }}">
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $anime->tahun }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $anime->deskripsi }}">
        </div>
        <div class="input-group mb-3">
            <label for="image" class="input-group-text">Upload</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($anime->image)
            <img src="{{ asset('image/' . $anime->image) }}" width="100px" height="100px">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('crud.index') }}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection