<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RiwayatPermohonanController;
use App\Http\Controllers\RiwayatPengaduanController;
use App\Http\Controllers\LayananAdministratifController;
use App\Http\Controllers\LayananPengaduanController;

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/signup', [RegistrasiController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegistrasiController::class, 'signup']);

Route::get('/profil', [ProfilController::class, 'show'])->middleware('auth')->name('profil');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/user/update/{id}', [ProfilController::class, 'update']);

Route::get('/riwayatpermohonan', [RiwayatPermohonanController::class, 'show'])->middleware('auth')->name('riwayatpermohonan');

Route::get('/riwayatpengaduan', [RiwayatPengaduanController::class, 'show'])->middleware('auth')->name('riwayatpengaduan');

Route::get('/profilkelurahan', function () {
    return view('profilkelurahan');
})->name('profilkelurahan');

Route::get('/layananadministratif', [LayananAdministratifController::class, 'show'])->middleware('auth')->name('layananadministratif');
Route::post('/administratif/store', [LayananAdministratifController::class, 'store'])->middleware('auth')->name('administratif.store');

Route::get('/layananpengaduan', [LayananPengaduanController::class, 'show'])->middleware('auth')->name('layananpengaduan');
Route::post('/layananpengaduan/store', [LayananPengaduanController::class, 'store'])->middleware('auth')->name('pengaduan.store');


