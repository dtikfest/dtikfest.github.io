<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPemenang extends Model
{
    use HasFactory;

    protected $table = 'kategori_pemenang';
    protected $primaryKey = 'id_kategori_pemenang';

    public function kategoriPemenangTimMhs()
    {
        return $this->hasOne(KategoriPemenangTimMhs::class, 'id_kategori_pemenang');
    }
}
