<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
        return view('pages.home',[
            'title' => 'Halaman Utama'
        ]);
   }

   public function form()
   {
        return view('pages.form', [
            'title' => 'Halaman Formulir'
        ]);
   }

}
