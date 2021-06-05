<?php

namespace App\Http\Controllers;

use App\Models\TimExhibitor;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk.index', [
            'tim' => TimExhibitor::where('tahun', $tahun)->get(),
        ]);
    }

    public function detailProdukTim(TimExhibitor $tim)
    {
        $tahun = session()->get('tahun');
        $images = [];
        foreach (glob(public_path() . '/aset-' . $tahun . '/img/produk/' . $tim->produk->id_produk . preg_replace("/[^A-Za-z0-9]/", "", $tim->produk->nama_produk) . '/*.*') as $filename) {
            $images[] = '/aset-' . $tahun . '/img/produk/' . $tim->produk->id_produk . preg_replace("/[^A-Za-z0-9]/", "", $tim->produk->nama_produk) . '/' . basename($filename);
        }

        return view($tahun . '.produk.detail-produk', compact('tim', 'tahun', 'images'));
        //parameter 'tim' diatas direferensikan ke url routing
    }
}
