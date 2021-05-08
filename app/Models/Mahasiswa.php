<?php

namespace App\Models;

use App\Models\Testimoni;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nrp';

    // public function testimoni()
    // {
    //     return $this->belongsTo(Testimoni::class);
    // }

    public function tim()
    {
        return $this->belongsToMany(TimExhibitor::class, 'id_tim');
    }
}
