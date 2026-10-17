<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyProfileController::class, 'home'])->name('home');
Route::get('/profil', [CompanyProfileController::class, 'profile'])->name('profil');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/layanan/{layanan}', [LayananController::class, 'show'])->name('layanan.show');
Route::get('/kontak', [CompanyProfileController::class, 'contact'])->name('kontak');
