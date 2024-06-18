<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/form', [HomeController::class, 'form'])->name('form');

Route::get('/books', [BookController::class, 'index'])->name('book.index');
Route::get('/book-delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');
