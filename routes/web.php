<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('beranda');
});
Route::get('/profil', function () {
    return view('profil');
});
use App\Http\Controllers\ProdukController;


Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/kulkas', [ProdukController::class, 'kulkas'])->name('produk.kulkas');
Route::get('/tv', [ProdukController::class, 'tv'])->name('produk.tv');
Route::get('/ac', [ProdukController::class, 'ac'])->name('produk.ac');