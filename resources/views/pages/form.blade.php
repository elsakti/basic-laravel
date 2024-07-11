@extends('partials.main')

@section('content')
@php
    if ($book) {
        $route = 'book.update';
        $id = $book->id;
    } else {
        $route = 'book.store';
        $id = '';
    }
@endphp
@if(session()->has('errors'))
    <div class="alert alert-danger">
        {{ session()->get('errors') }}
    </div>
@endif
    <div class="container">
        <h1 style="text-align: center">Selamat Datang di Halaman Formulir</h1>
        <form action="{{ route($route,$id) }}" method="POST" enctype="multipart/form-data">
            @if ($book)
                @method('PUT')
            @endif
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">{{ $book ? 'Perbarui' : 'Tambahkan' }} judul buku: </label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book ? $book->title : '' }}">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">{{ $book ? 'Perbarui' : 'Tambahkan' }} nama author: </label>
                <input type="text" class="form-control" id="author" name="author" name="author" value="{{ $book ? $book->author : '' }}">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">{{ $book ? 'Perbarui' : 'Tambahkan' }} kategori buku: </label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $book ? $book->category : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ $book ? 'PERBARUI' : 'KIRIM' }}</button>
        </form>
    </div>
@endsection



