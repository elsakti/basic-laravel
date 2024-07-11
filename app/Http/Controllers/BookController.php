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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:books',
            'author' => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', 'Input data buku tidak valid');
        }

        $validatedData = $validator->validated();
        Book::create($validatedData);
        return redirect()->route('book.index')->with('success', 'Data buku berhasil dibuat');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('pages.form',[
            'title' => $book->title . ' EDIT',
            'book' => $book
        ]);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', 'Input data buku tidak valid');
        }

        $validatedData = $validator->validated();
        $book->update($validatedData);
        return redirect()->route('book.index')->with('success', 'Data buku berhasil diperbarui');

    }

}
