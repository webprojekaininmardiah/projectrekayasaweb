<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('page.home');
})->name('home');

// Halaman projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');

// Halaman about
Route::get('/about', function () {
    return view('page.about');
})->name('about');

// Halaman contact
Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim!');
})->name('contact.submit');

// Halaman profil
Route::get('/profile', function () {
    $mahasiswa = [
        'status' => 'Aktif',
        'nama' => 'Ainin Mardiah Lase',
        'nim' => '251011700764',
        'prodi' => 'Sistem Informasi',
        'email' => 'aininmardiah@gmail.com',
        'kampus' => 'Universitas Pamulang'
    ];
    
    return view('page.profile', compact('mahasiswa'));
})->name('profile');



// --- PENGATURAN LOGIN ADMIN ---
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Halaman dashboard admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.dashboard');

    Route::get('/projects/pdf', [AdminProjectController::class, 'cetakPdf'])->name('projects.pdf');
    Route::resource('projects', AdminProjectController::class);
});
