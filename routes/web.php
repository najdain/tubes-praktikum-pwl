<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('home');
// });

Route::resource('book', BookController::class);

