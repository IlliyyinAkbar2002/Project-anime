@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="p-5 text-center bg-body-tertiary rounded-3">
        <h1 class="text-body-emphasis">Welcome of Crud Application, Anime</h1>
        <p class="col-lg-8 mx-auto fs-5 text-muted">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, optio. Aliquam laboriosam iure, veritatis tempore libero minus animi obcaecati eligendi, reiciendis quibusdam sunt. Unde eum debitis maiores dolor et numquam. <code>.col-*</code> class, and a customized call to action.
        </p>
        <div class="d-inline-flex gap-2 mb-5">
            <a class="btn btn-primary btn-lg px-4 rounded-pill" aria-current="page" href="{{ route('crud.home') }}">Crud Operations</a>
        </div>
    </div>
</div>
@endsection