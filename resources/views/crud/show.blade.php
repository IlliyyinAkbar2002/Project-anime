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
    <form>
        <fieldset disabled>
            <legend>Show Data Anime {{$anime->namaFilm}}</legend>
            <div class="mb-3">
                <label for="disabledTextInput" name="namaFilm" class="form-label">Nama Film</label>
                <input type="text" name="namaFilm" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$anime->namaFilm}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" name="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$anime->slug}}">
            </div>
            <div class=" mb-3">
                <label for="disabledTextInput" name="genre" id="genre">Genre</label>
                <input type="text" name="genre" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$anime->genre}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label" name="rating" id="rating">Rating</label>
                <input type="text" name="rating" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$anime->rating}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label" name="tahun" id="tahun">Tahun</label>
                <input type="text" name="tahun" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$anime->tahun}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label" name="deskripsi" id="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$anime->deskripsi}}">
            </div>
            <div class="mb-3">
                <img src="{{asset('image/' . $anime->image)}}" alt="{{$anime->namaFilm}}" width="100" height="100">
            </div>
        </fieldset>
        <button class="btn btn-danger" type="submit" formaction="{{route('crud.index')}}">Back</button>
    </form>
</div>

@endsection