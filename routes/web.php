<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
    // $nama = 'Surya';
    // return'Hello ' . $nama;

    //Menghitung rumus aritmatika
    // $r = 15;
    // $phi = 3.14;
    // $luas_lingkaran = ($r * $r) * $phi;
    // return 'Luas lingkaran dengan jumlah jari-jari ' . $r . ' adalah ' . $luas_lingkaran;

    //Perbandingan
    //$nama = 'Surya';
    //$kelas = 'A1';
    //$prodi = 'Teknologi Informasi';
    //return 'Nama saya adalah <b>' . $nama . '</b><br> Saya kelas <b>' . $kelas . '</b><br> Saya prodi <b>' . $prodi . '</b>';

    Route::get('/', function () {
    return view('index');
});
    Route::get('mahasiswa', function () {
    return view('mahasiswa');
});
    
    Route::get('about', function () {
    return view('about');
});
    Route::get('profile', function () {
    return view('profile');
});
Route::get('array', function () {
    // $nilai_awal = 1;
    // while ($nilai_awal <= 100) {
    //     echo 'Hello Laravel ' . $nilai_awal . 'x <br>';
    //     $nilai_awal++; )
    
    for ($i=1; $i <= 5; $i++) {
        echo 'Hello World ' . $i . 'x<br>';

    }
    
});