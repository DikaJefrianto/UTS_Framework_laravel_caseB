<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pemesanans', [PemesananController::class, 'index'])->name('pemesanans.index');
Route::get('pemesanans/create', [PemesananController::class, 'create'])->name('pemesanans.create');
Route::post('pemesanans', [PemesananController::class, 'store'])->name('pemesanans.store');
Route::get('pemesanans/{pemesanan}/edit', [PemesananController::class, 'edit'])->name('pemesanans.edit');
Route::put('pemesanans/{pemesanan}', [PemesananController::class, 'update'])->name('pemesanans.update');
Route::delete('pemesanans/{pemesanan}', [PemesananController::class, 'destroy'])->name('pemesanans.destroy');

Route::get('/pemesanans/trashed', [PemesananController::class, 'trashed'])->name('pemesanans.trashed'); // Daftar yang dihapus
Route::get('/pemesanans/{id}/restore', [PemesananController::class, 'restore'])->name('pemesanans.restore'); // Memulihkan yang dihapus
