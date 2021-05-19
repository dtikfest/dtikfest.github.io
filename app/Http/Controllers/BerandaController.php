<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\KategoriProduk;
use App\Models\Testimoni;
use Illuminate\Http\Request;



class BerandaController extends Controller
{
    public function __invoke()
    {
        $industri = Industri::all();
        $galeri = Galeri::all();
        $testimoni = Testimoni::all();
        $kategori = Kategori::all();
        $katPro = KategoriProduk::all()->where('tahun', '2021');
        $kategoriProduk = session()->put('kategoriProduk', $katPro);
        return view('home', compact(
            'industri',
            'galeri',
            'testimoni',
            'kategori',
            'kategoriProduk'
        ));
    }

    public function galeri(Request $thn)
    {
        $tahun = $thn->segment(count(request()->segments()));
        $images = [];
        foreach (glob(public_path() . '/img/gallery/' . $tahun . '/*.*') as $filename) {
            $images[] = '/img/gallery/' . $tahun . '/' . basename($filename);
        }
        return view('galeri', compact('images', 'tahun'));
    }
}
