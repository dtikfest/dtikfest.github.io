<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk.home');
    }

    public function detailProduk()
    {
        return view('produk.detail-produk');
    }
}
