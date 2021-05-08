<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use App\Models\Galeri;
use App\Models\Testimoni;
use Illuminate\Http\Request;


class BerandaController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'industri' => Industri::all(),
            'galeri' => Galeri::all(),
            'testimoni' => Testimoni::all(),
        ]);
    }
}
