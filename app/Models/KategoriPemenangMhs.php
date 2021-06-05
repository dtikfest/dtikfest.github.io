<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPemenangMhs extends Model
{
    use HasFactory;
    protected $table = 'kategori_pemenang_mahasiswa';
    protected $primaryKey = 'id_kategori_pemenang';

    public function kategoriPemenang()
    {
        return $this->hasOne(KategoriPemenang::class, 'id_kategori_pemenang');
    }

    public function detailJuara()
    {
        return $this->hasOne(Mahasiswa::class, 'nrp', 'nrp');
    }
}
