<?php

use Illuminate\Support\Facades\Route;

// Praktikum 1
Route::get('/hello', function () { 
    return 'Hello World';
});

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