<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::orderBy('kategori')->orderBy('nama')->get();

        return view('layanan.index', compact('layanans'));
    }

    public function show(Layanan $layanan)
    {
        return view('layanan.show', compact('layanan'));
    }
}
