<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KendaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $kendaraan = [
            ['merk' => 'Yamaha', 'model' => 'MX King','harga' => 12000000, 'stok' => 10 ],
            ['merk' => 'Honda', 'model' => 'Vario','harga' => 9000000, 'stok' => 15 ],
            ['merk' => 'Kawasaki', 'model' => 'ZX 250R','harga' => 100000000, 'stok' => 3 ],
            ['merk' => 'Yamaha', 'model' => 'Mio','harga' => 5000000, 'stok' => 17 ],
            ['merk' => 'Honda', 'model' => 'Beat','harga' => 5000000, 'stok' => 9 ],
        ];

        DB:: table('kendaraan')->insert($kendaraan);
    }
}
