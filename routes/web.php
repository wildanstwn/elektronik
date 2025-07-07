<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/kulkas', [ProdukController::class, 'kulkas'])->name('produk.kulkas');
Route::get('/tv', [ProdukController::class, 'tv'])->name('produk.tv');
Route::get('/ac', [ProdukController::class, 'ac'])->name('produk.ac');

Route::get('/profil', function () {
    return view('profil');
});