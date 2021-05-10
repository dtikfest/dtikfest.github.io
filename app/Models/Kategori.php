<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';

    public function kategoriProduk()
    {
        return $this->belongsToMany(KategoriProduk::class, 'id_kategori');
    }
}
