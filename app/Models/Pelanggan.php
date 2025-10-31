<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{


    protected $table = 'pelanggans'; // atau 'pelanggan' sesuai nama tabel kamu

    // Tambahkan semua kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];
}


