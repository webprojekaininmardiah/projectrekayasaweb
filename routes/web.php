<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Routs::get('/',function)

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/profile', function () {
    return view('page.profile');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);