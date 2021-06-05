<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPemenangTimMhs extends Model
{
    use HasFactory;

    protected $table = 'kategori_pemenang_tim_mhs';
    protected $primaryKey = 'id_kategori_pemenang';

    public function kategoriPemenang()
    {
        return $this->hasMany(KategoriPemenang::class, 'id_kategori_pemenang', 'id_kategori_pemenang');
    }
}
