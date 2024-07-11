<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/form', [HomeController::class, 'form'])->name('form');

Route::get('/books', [BookController::class, 'index'])->name('book.index');
Route::get('/book-edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::get('/book-delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');

Route::post('/book-store',[BookController::class, 'store'] )->name('book.store');
Route::put('/book-update/{id}',[BookController::class, 'update'] )->name('book.update');

Route::fallback(function () {
    return view('errors.404', [
        'title' => '404 error'
    ]);
});
