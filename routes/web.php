<?php

use Illuminate\Support\Facades\Route;
use App\models\Barang;
use App\Models\Kategori;
use App\models\Bangunan;
use App\models\Tanah;
use App\models\Ruangan;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\BangunanController;


// Route::get('/', function () {
//     return view('auth.login');
// });
Route::resource('/barang', BarangController::class)->names('barang');
Route::resource('/kategori', KategoriController::class)->names('kategori');
Route::resource('/user', UserController::class)->names('user');
Route::resource('/tanah', TanahController::class)->names('tanah');
Route::resource('/ruangan', RuanganController::class)->names('ruangan');
Route::resource('/bangunan', BangunanController::class)->names('bangunan');

// Route::middleware('guest')->group(function () {
//     Route::get('/login', function () {
//         return view('auth.login');
//     })->name('login');
//     Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
// });