<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return '<h1>Hallo</h1>'.
            '<br>Selamat Datang di Perpustakaan Digital';
});

Route::get('fahmi', function () {
    return '<h1>Hai :)</h1>'.
            '<br>Perkenalkan Nama Saya Muhamad Fahmi Effendi'.
            '<br>umur saya 15 dan saya kelas XI RPL 3';
});

Route::get('buku', function () {
    return view('buku');
});

Route::get('menu', function () {
    $data = [
        ['nama_makanan'=>'bala_bala','harga'=>1000, 'jumlah'=>10],
        ['nama_makanan'=>'gehu_pedas','harga'=>2000, 'jumlah'=>15],
        ['nama_makanan'=>'cireng_isi','harga'=>2500, 'jumlah'=>5],
    ];
    $resto = "Resto MPL - Makanan Penuh Lemak";
    return view('menu', compact('data','resto'));
});

Route::get('books/{judul}',function($a){
    return 'Judul Buku: '.$a;
}); 

Route::get('post/{title}/{category}',function($a,$b){
    return view('post',['judul'=>$a, 'cat'=>$b]);
});

Route::get('profile/{nama?}',function($a = "guest"){
    return "Halo nama saya ".$a;
});

Route::get('order/{item?}',function($a = "Nasi"){
    return view('order',compact('a'));
});

Route::get('barang', function () {
    $data = [
        ['nama_benda'=>'buku','harga'=>15000, 'jumlah'=>2],
        ['nama_benda'=>'pensil','harga'=>3000, 'jumlah'=>5],
        ['nama_benda'=>'penggaris','harga'=>7000, 'jumlah'=>1],
    ];
    $resto = "Jualan perlengkapan sekolah";
    return view('barang', compact('data','resto'));
});

Route::get('/nilai/{nama}/{mapel}/{nilai}', function ($nama, $mapel, $nilai) {
    return view('nilai-kelulusan', compact('nama', 'mapel', 'nilai'));
});

Route::get('/grading/{nama?}/{nilai?}', function ($nama = 'Guest', $nilai = 0) {
    return view('grading', compact('nama', 'nilai'));
});

Route::get('/nilai-ratarata', function () {
    $siswa = [
        ['nama' => 'Andi', 'nilai' => 85],
        ['nama' => 'Budi', 'nilai' => 70],
        ['nama' => 'Citra', 'nilai' => 95],
    ];

    return view('nilai-ratarata', compact('siswa'));
});