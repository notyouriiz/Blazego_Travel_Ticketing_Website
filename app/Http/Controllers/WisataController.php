<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman wisata (semua destinasi)
        return view('wisata');
    }

    public function showItaly()
    {
        // Logika untuk menampilkan halaman wisata Italy
        return view('wisata_italy');
    }

    public function showIndonesia()
    {
        // Logika untuk menampilkan halaman wisata Indonesia
        return view('wisata_indonesia');
    }
}
