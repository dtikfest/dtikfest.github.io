<?php

namespace App\Http\Controllers;

use App\Models\TimExhibitor;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Kategori $kategori_produk)
    {
        $tahun = session()->get('tahun');
        return view(session()->get('tahun') . '.produk.index', compact('kategori_produk', 'tahun'));
    }

    public function detailProdukTim(TimExhibitor $tim)
    {
        $tahun = session()->get('tahun');
        $images = [];
        foreach (glob(public_path() . '/aset-' . $tahun . '/img/produk/' . $tim->produk->id_produk . strtolower(preg_replace("/[^A-Za-z0-9]/", "", $tim->produk->nama_produk)) . '/*.*') as $filename) {
            $images[] = '/aset-' . $tahun . '/img/produk/' . $tim->produk->id_produk . strtolower(preg_replace("/[^A-Za-z0-9]/", "", $tim->produk->nama_produk)) . '/' . basename($filename);
        }

        return view($tahun . '.produk.detail-produk', compact('tim', 'tahun', 'images'));
    }
}
