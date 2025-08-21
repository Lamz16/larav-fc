<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('buku')->group(function () {

    Route::get('/', [BookController::class, 'index']);

    Route::get('/detail/{id?}', [BookController::class, 'show']);
});
