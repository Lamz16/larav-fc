<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController as BC;
use App\Models\Barang as Brg;
use App\Models\User as Usr;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::prefix('buku')->middleware('valid-token')->group(function () {

//     Route::get('/', [BC::class, 'index']);

//     Route::get('/detail/{id?}', [BC::class, 'show']);
// });

Route::prefix('buku')->group(function () {

    Route::get('/', [BC::class, 'index']);

    Route::get('/detail/{id?}', [BC::class, 'show']);
});

Route::get('/testing', function(){
    // $user = new Usr;
    // $user ->name ='Andi Salam Syahputra';
    // $user ->email ='andiku0755@gmail.com';
    // $user ->password = bcrypt('password');
    // $user -> save();

    // $user = Usr::create([
    //     'name' => 'Hapidin Azis',
    //     'email'=> 'hapiding@gmail.com',
    //     'password' => bcrypt('password'),
    // ]);

    // $users = Usr::all();
    // dd($users);

    // Brg::create([
    //     'users_id' => 1,
    //     'name' => 'Buku 1',
    //     'description' => 'Buku ke 1'
    // ]);

    $user = Usr::find(1);
    // $user->name = 'Salam';
    // $user->save();

    $user -> update([
        'name' => 'Andi Salam Syahputra',
        'email' => 'andiku07@gmail.com',
        'password' => 'pw',
    ]);
});