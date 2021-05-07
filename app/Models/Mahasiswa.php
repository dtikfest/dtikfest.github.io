<?php

namespace App\Models;

use App\Models\Testimoni;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';

    public function testimoni()
    {
        return $this->hasOne(Testimoni::class);
    }
}
