<?php

use Illuminate\Support\Facades\Route;
// use app\models\Barang;
use App\Models\Kategori;
// use app\models\Bangunan;
// use app\models\Tanah;
// use app\models\Ruangan;
// use app\Http\Controllers\BarangController;
// use app\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
// use app\Http\Controllers\TanahController;
// use app\Http\Controllers\RuanaganController;


// Route::get('/', function () {
//     return view('auth.login');
// });
// Route::resource('/barang', BarangController::class)->names('barang');
Route::resource('/kategori', KategoriController::class)->names('kategori');
// Route::resource('/user', UserController::class)->names('user');
// Route::resource('/tanah', TanahController::class)->names('tanah');
// Route::resource('/ruangan', RuanganController::class)->names('ruangan');
// Route::resource('/bangunan', BangunanController::class)->names('bangunan');

// Route::middleware('guest')->group(function () {
//     Route::get('/login', function () {
//         return view('auth.login');
//     })->name('login');
//     Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
// });