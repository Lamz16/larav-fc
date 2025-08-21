<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController as BC;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('buku')->group(function () {

    Route::get('/', [BC::class, 'index']);

    Route::get('/detail/{id?}', [BC::class, 'show']);
});
