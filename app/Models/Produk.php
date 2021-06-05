<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    use HasFactory;

    public function tim()
    {
        return $this->hasone(TimExhibitor::class, 'id_tim');
    }

    public function kategori()
    {
        return $this->hasOne(Kategori::class, 'id_kategori');
    }
}
