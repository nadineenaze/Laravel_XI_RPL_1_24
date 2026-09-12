<?php

namespace App\Http\Controllers;

class HalamanController extends Controller
{
    public function halamanSatu()
    {
        return view('halaman_satu');
    }

    public function halamanDua()
    {
        return view('halaman_dua');
    }
}