<?php

namespace App\Http\Controllers;

use App\Models\TimExhibitor;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk.index', [
            'tim' => TimExhibitor::all(),
        ]);
    }

    public function detailProdukTim(TimExhibitor $tim)
    {
        // $anggota_tim = $tim->anggotaTim()->latest();
        $tahun = session()->get('tahun');
        return view($tahun . '.produk.detail-produk', compact('tim', 'tahun'));
        //parameter 'tim' diatas direferensikan ke url routing
    }
}
