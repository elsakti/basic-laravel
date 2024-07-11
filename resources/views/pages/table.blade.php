@extends('partials.main')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<div class="container">
    <h1 style="text-align: center">Selamat Datang di Halaman Tabel</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Author</th>
            <th scope="col">Kategori</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->category }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('book.edit', $book->id) }}">EDIT</a>
                    <a class="btn btn-danger" href="{{ route('book.destroy',$book->id) }}">DELETE</a>
                </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection


