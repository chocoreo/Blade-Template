<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa/', function () {
    $data = [
        'nama'  => "Metta Saputra",
        'npm'   => "1822250042",
        'jk'    => "P",
        "tl"    => "02-Mei-2000",
        "t"     => "Palembang",
        "studi" => "(S1) Teknik Informatika"
    ];
    return view('mahasiswa.profil',$data);
});

Route::get('dosen/', function () {
    $data = [
        'nama'  => "Johannes Petrus, S.Kom, M.T.I.",
        'nim'   => "041032",
        'jk'    => "L",
        "tl"    => "03-April-1999",
        "t"     => "Los Angeles",
    ];
    return view('dosen.profil', $data);
});