<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimExhibitor extends Model
{
    use HasFactory;
    protected $table = 'tim_exhibitor';
    protected $primaryKey = 'id_tim';

    public function produk()
    {
        return $this->hasOne(Produk::class, 'id_produk');
    }

    public function anggotaTim()
    {
        return $this->hasMany(Mahasiswa::class, 'id_tim');
    }
}
