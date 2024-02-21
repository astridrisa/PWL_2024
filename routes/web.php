<?php

use Illuminate\Support\Facades\Route;

// Praktikum 1
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticlesController::class);


use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);




Route::get('/world', function () { 
    return 'World';
});

// Langkah f
Route::get('/', function () {
    return 'Selamat Datang';
});

// Langkah g
Route::get('/about', function () {
    $nim = '2241720250';
    $nama = 'Astrid Risa Widiana';

    return "NIM: $nim<br>Nama: $nama";
});

//Praktikum 2
Route::get('/user/{astrid}', function ($name) { 
    return 'Astrid Risa Widiana '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });    

    Route::get('/articles/{id}', function ($id) {
        return "Halaman Artikel dengan ID $id";
    });


//Praktikum 3
Route::get('/user/{name?}', function ($name='John') {
    return 'Astrid Risa Widiana '.$name;
});