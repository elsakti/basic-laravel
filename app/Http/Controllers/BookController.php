<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    // Fungsi untuk menampilkan data dari tabel dalam halaman tabel
    public function index()
    {
        $books = Book::all();
        return view('pages.table',[
            'title' => 'Halaman Tabel',
            'books' => $books
        ]);
    }

    // Fungsi untuk menghapus salah satu data di tabel
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->back();
    }

}
