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
        $kategoriPemenang = KategoriPemenangTimMhs::where('tahun', '2021')
            //->select('id_tim')
            // ->groupBy('id_tim')
            //->distinct()
            ->get();
        // $kategoriPemenang = KategoriPemenang::join(
        //     'kategori_pemenang_tim_mhs',
        //     'kategori_pemenang_tim_mhs.id_kategori_pemenang',
        //     'kategori_pemenang.id_kategori_pemenang'
        // )
        //     ->groupBy('kategori_pemenang_tim_mhs.id_kategori_pemenang')
        //     ->get();
        return view($tahun . '.pemenang.index', compact('kategoriPemenang', 'tahun'));
    }

    public function peringkatJuara()
    {
        return view('pemenang.peringkatJuara');
    }
}
