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
    public function index(Kategori $kategori_produk)
    {
        $tahun = session()->get('tahun');
        return view(session()->get('tahun') . '.produk.index', compact('kategori_produk', 'tahun'));
    }
}
