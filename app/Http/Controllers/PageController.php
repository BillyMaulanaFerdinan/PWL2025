<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan pesan "Selamat Datang"
    public function index()
    {
        return 'Selamat Datang';
    }

    // Menampilkan NIM dan Nama
    public function about()
    {
        return 'NIM: 2341720196 <br> Nama: Billy Maulana Ferdinan';
    }

    // Menampilkan halaman artikel dengan ID
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
