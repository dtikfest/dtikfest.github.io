<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KategoriPemenang;
use App\Models\KategoriPemenangTimMhs;
use Illuminate\Http\Request;

class PemenangController extends Controller
{
    public function __invoke()
    {
        $tahun = session()->get('tahun');
        $kategoriPemenang = KategoriPemenang::where('tahun', '2021')->get();
        return view($tahun . '.pemenang.index', compact('kategoriPemenang', 'tahun'));
    }

    public function peringkatJuara()
    {
        return view('pemenang.peringkatJuara');
    }
}
