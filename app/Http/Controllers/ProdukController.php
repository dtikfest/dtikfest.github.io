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
        return view('produk.detail-produk', compact('tim'));
        //parameter 'tim' diatas direferensikan ke url routing
    }
}
