<?php
use App\Http\Controllers\MahasiswaCrontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/', [MahasiswaController::class, 'index']);mahasiswa