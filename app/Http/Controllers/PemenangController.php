<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KategoriPemenang;
use App\Models\KategoriPemenangMhs;
use App\Models\KategoriPemenangTim;
use App\Models\KategoriPemenangTimMhs;
use App\Models\KategoriProduk;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PemenangController extends Controller
{
    public function __invoke()
    {
        $tahun = session()->get('tahun');
        $kategoriPemenangMhs = KategoriPemenangMhs::where('tahun', $tahun)->distinct()->get('id_kategori_pemenang');
        $kategoriPemenangTim = KategoriPemenangTim::where('tahun', $tahun)->distinct()->get('id_kategori_pemenang');
        return view($tahun . '.pemenang.index', compact('kategoriPemenangMhs', 'kategoriPemenangTim', 'tahun'));
    }

    public function peringkatJuaraMhs(Request $req)
    {
        $tahun = session()->get('tahun');
        $req = $req->segment(count(request()->segments()));
        $peringkatJuara = KategoriPemenangMhs::where('id_kategori_pemenang', $req)->get();
        $jenis = 'solo';
        return view($tahun . '.pemenang.peringkatJuara', compact('tahun', 'peringkatJuara', 'jenis'));
    }
    public function peringkatJuaraTim(Request $req)
    {
        $tahun = session()->get('tahun');
        $req = $req->segment(count(request()->segments()));
        $peringkatJuara = KategoriPemenangTim::where('id_kategori_pemenang', $req)->get();
        $jenis = 'tim';
        return view($tahun . '.pemenang.peringkatJuara', compact('tahun', 'peringkatJuara', 'jenis'));
    }
}
