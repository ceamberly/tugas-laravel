<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::match(['get', 'post'], '/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

Route::get('/', function () {
    return view('welcome');
});