<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
