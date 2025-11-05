<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = 'Novilya Musfira Bahri';
    return view('about')->with('nama',$nama);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/produk', function () {
    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000],
    ];
    return view('produk', compact('produk'));
});

Route::get('/tambah', function () {
    $jenis = [
        'Alat Tulis',
        'Elektronik',
        'Sembako',
    ];
    return view('tambah', compact('jenis'));
});