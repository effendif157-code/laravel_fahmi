<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $filable = ['nama', 'id_mahasiswa'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
}
