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
        $kategoriPemenang = KategoriPemenangTimMhs::where('tahun', '2021')
            ->distinct()
            ->get();
        // $kategoriPemenang = KategoriPemenang::join(
        //     'kategori_pemenang_tim_mhs',
        //     'kategori_pemenang_tim_mhs.id_kategori_pemenang',
        //     'kategori_pemenang.id_kategori_pemenang'
        // )
        //     ->groupBy('kategori_pemenang_tim_mhs.id_kategori_pemenang')
        //     ->get();
        return view('pemenang.index', compact('kategoriPemenang'));
    }

    public function peringkatJuara()
    {
        return view('pemenang.peringkatJuara');
    }
}
