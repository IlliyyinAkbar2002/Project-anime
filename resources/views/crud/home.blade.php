@extends('layouts.main')

@section('content')

<!--
namaFilm
slug
rating
genre
tahun
deskripsi
image
*-->

<h1 class="text-center">Crud Operations</h1>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Film</th>
                <th scope="col">Slug</th>
                <th scope="col">Rating</th>
                <th scope="col">Genre</th>
                <th scope="col">Tahun</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <a href="{{ route('crud.create') }}" class="btn btn-primary">Create Data</a>
        <tbody>
            @foreach ($anime as $item)
            <tr>
                <td>{{ $item->namaFilm }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->rating }}</td>
                <td>{{ $item->genre }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td><img src="{{ asset('image/' . $item->image) }}" width="100px" height="100px"></td>
                <td>
                    <a href="{{ route('crud.show', $item->id) }}" class="btn btn-dark">Show</a>
                    <a href="{{ route('crud.edit', $item->id) }}" class="btn btn-success">Update</a>
                    <form action="{{ route('crud.destroy', $item->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection