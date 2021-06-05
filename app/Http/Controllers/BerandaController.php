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
    public function __invoke(Request $req)
    {
        session()->put('tahun', '2021');
        $thn = $req->segment(count(request()->segments()));
        if (isset($thn)) {
            session()->put('tahun', $thn);
        }
        $tahun = session()->get('tahun');
        $industri = Industri::where('tahun', $tahun)->get();
        $galeri = Galeri::where('tahun', $tahun)->get();
        $testimoni = Testimoni::where('tahun', $tahun)->get();
        $katPro = Kategori::where('tahun', $tahun)->get();
        $kategoriProduk = session()->put('kategoriProduk', $katPro);
        return view($tahun . '.home', compact(
            'industri',
            'galeri',
            'testimoni',
            'kategoriProduk',
            'tahun'
        ));
    }

    public function galeri(Request $thn)
    {
        $tahun = session()->get('tahun');
        $tahunGal = $thn->segment(count(request()->segments()));
        $images = [];
        foreach (glob(public_path() . '/galeri-img/' . $tahunGal . '/*.*') as $filename) {
            $images[] = '/galeri-img/' . $tahunGal . '/' . basename($filename);
        }
        return view($tahun . '/galeri', compact('images', 'tahun'));
    }
}
