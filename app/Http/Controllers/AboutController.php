<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $nim = '2241720250';
        $nama = 'Astrid Risa Widiana';

        return "NIM: $nim<br>Nama: $nama";
    }
}
