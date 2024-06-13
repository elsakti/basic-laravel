@extends('partials.main')

@section('content')
<div class="container">
    <h1 style="text-align: center">Selamat Datang di Halaman Tabel</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Author</th>
            <th scope="col">Kategori</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Contoh Judul 1</td>
            <td>Contoh Author 1</td>
            <td>Contoh Kategori 1</td>
          </tr>
          <tr>
            <th>2</th>
            <td>Contoh Judul 2</td>
            <td>Contoh Author 2</td>
            <td>Contoh Kategori 2</td>
          </tr>
          <tr>
            <th>3</th>
            <td>Contoh Judul 3</td>
            <td>Contoh Author 3</td>
            <td>Contoh Kategori 3</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection


