<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\TimExhibitor;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index(KategoriProduk $kategori_produk)
    {
        return view('produk.index', compact('kategori_produk'));
    }
}
