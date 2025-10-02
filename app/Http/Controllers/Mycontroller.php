<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function hello()
    {
        $nama = "Fahmi";
        $umur = "16";

        return view('hello', compact('nama','umur'));
    }

    public function siswa() {
        $data =[
            ['nama'=>'Rehan','kelas'=>'XI RPL 3'],
            ['nama'=>'Dadan','kelas'=>'XI RPL 3'],
            ['nama'=>'Didin','kelas'=>'XI RPL 3'],
        ];
        return view('siswa', compact('data'));
    }
}