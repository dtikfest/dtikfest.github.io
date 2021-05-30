<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function __invoke()
    {
        $tahun = session()->get('tahun');
        return view($tahun . '.arsip', compact('tahun'));
    }

    public function tahun(Request $tahun)
    {
    }
}
