<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Industri;
use App\Models\Galeri;
use Illuminate\Http\Request;


class BerandaController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'mahasiswa' => Mahasiswa::all(),
            'industri' => Industri::all(),
            'galeri' => Galeri::all(),
        ]);
    }
}
