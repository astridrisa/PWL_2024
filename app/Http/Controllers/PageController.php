<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        // Ganti NIM dan nama sesuai kebutuhan
        $nim = '123456789';
        $nama = 'Nama Anda';

        return "NIM: $nim<br>Nama: $nama";
    }

    public function show($id)
    {
        return "Halaman Artikel dengan ID $id";
    }
}