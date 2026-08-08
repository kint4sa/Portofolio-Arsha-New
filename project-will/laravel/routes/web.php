<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KelolaDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::prefix('absensi')->name('absensi.')->group(function () {
    Route::get('pramuka', [AbsensiController::class, 'pramuka'])->name('pramuka');
    Route::get('pmr', [AbsensiController::class, 'pmr'])->name('pmr');
    Route::get('voli', [AbsensiController::class, 'voli'])->name('voli');
});

Route::get('kelola/data', [KelolaDataController::class, 'index'])->name('kelola.data');
