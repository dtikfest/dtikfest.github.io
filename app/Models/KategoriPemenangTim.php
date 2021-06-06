<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPemenangTim extends Model
{
    use HasFactory;
    protected $table = 'kategori_pemenang_tim';
    protected $primaryKey = 'id_kategori_pemenang';

    public function kategoriPemenang()
    {
        return $this->hasOne(KategoriPemenang::class, 'id_kategori_pemenang');
    }

    public function tim()
    {
        return $this->hasOne(TimExhibitor::class, 'id_tim', 'id_tim');
    }
}
