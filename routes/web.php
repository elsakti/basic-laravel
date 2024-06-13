<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('pages.home', ['title' => 'Halaman Utama']);
});

Route::get('/table',function(){
    return view('pages.table', ['title' => 'Halaman Tabel']);
});

Route::get('/form',function(){
    return view('pages.form', ['title' => 'Halaman Formulir']);
});


