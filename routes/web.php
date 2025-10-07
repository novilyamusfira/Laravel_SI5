<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return 'Halo Laravel';
});

Route::get('about', function () {
    return 'Ini adalah Halaman <b>About</b>';
});

Route::get('mahasiswa', function () {
    return 'Ini adalah Halaman <b>Mahasiswa</b>';
});

Route::get('profile', function () {
    $nama = "fulan";
    return 'Ini adalah Halaman <b>profile</b>, nama saya adalah' . '$nama';
});