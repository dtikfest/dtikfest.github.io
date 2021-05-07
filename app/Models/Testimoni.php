<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimoni';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nrp');
    }
}
