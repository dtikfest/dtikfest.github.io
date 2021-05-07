<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class BerandaController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'mahasiswa' => Mahasiswa::all()
        ]);
    }
}
