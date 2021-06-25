<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimoni';
    protected $primaryKey = 'id_testimoni';
    //primary key wajib dispesifikasikan, kalo tidak, bakal erorr

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'nrp', 'nrp');
        //parameter kedua untuk menspesifikasi field yang dijadikan relasi
    }
}
