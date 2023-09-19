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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('Hello world');
});

Route::get('/mahasiswa/{nama}/{jeniskelamin}', function ($nama, $jeniskelamin) {
    return "Tampilkan data mahasiswa bernama $nama yang berjenis kelamin $jeniskelamin";
});

Route::get('/siswa', function(){
    $array_nama = ["Milkyha", "Go yung joon", "Park bo young"];
    return view('universitas.mahasiswa')->with('mahasiswa', $array_nama);
});

Route::get('/crush/{crush}', function ($crush) {
    return "$crush gw cakep bat";
});