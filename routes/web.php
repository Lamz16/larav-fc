<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController as BC;
use App\Models\Barang as Brg;
use App\Models\User as Usr;
Use App\Models\ProfileDetail as Profile;

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

    // $user = Usr::find(1);
    // $user->name = 'Salam';
    // $user->save();

    // $user = Usr::first();
    // $user->name = 'Andi Salam Syahputra';
    // $user->save();

    // $user -> update([
    //     'name' => 'Andi Salam Syahputra',
    //     'email' => 'andiku07@gmail.com',
    //     'password' => 'pw',
    // ]);

    // $user = Usr::first();
    // $user->profileDetail()-> create([
    //     'address' => 'Jember',
    //     'education' => 'Bachelor Of Information System'
    // ]);

    // $profileDetail = Profile::first();
    // dd($profileDetail -> user);

    //$user = Usr::first();
    // $user->products()->create([
    //     'name' => 'Shield',
    //     'description' => 'Thor Shield',
    //     'price' => 150000
    // ]);
    //dd($user->products()->where('name', 'Plate')->get());

    // return view('list-products', [
    //     'products' => $user->products
    // ]);

    //$user = Usr::find(10);
    // $user->eskuls()->attach(\App\Models\Eskul::where('name','Badminton')->first());
    // $user->eskuls()->attach(\App\Models\Eskul::where('name','Marching Band')->first());
    
    // $user = Usr::find(5);
    // $user->eskuls()->attach(\App\Models\Eskul::where('name','Badminton')->first());
    // $user->eskuls()->attach(\App\Models\Eskul::where('name','Basket')->first());
    // $user->eskuls()->detach();

    // $badminton = \App\Models\Eskul::where('name', 'Basket')->first();
    // dd($badminton ->users);


    // $users = Usr::active()->get();
    // dd($users);

    //$users= Usr::all();
    $users = Usr::with('products')->get();
    foreach($users as $user) {
        dump($user-> products);
    }
});