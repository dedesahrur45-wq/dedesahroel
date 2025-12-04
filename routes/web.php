<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
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


// Note: Auth routes/views removed to make application public as requested.
// Dashboard route (public)
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Dummy auth routes (disabled) — keep names to avoid broken links elsewhere
Route::get('/login', function () {
    return redirect()->route('dashboard');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
});

Route::post('/logout', function () {
    return redirect()->route('dashboard');
})->name('logout');

// Public Resource Routes (anyone can view/add/edit/delete)
Route::resource('/barang', BarangController::class)->names('barang');
Route::resource('/kategori', KategoriController::class)->names('kategori');
Route::resource('/user', UserController::class)->names('user');
Route::resource('/tanah', TanahController::class)->names('tanah');
Route::resource('/ruangan', RuanganController::class)->names('ruangan');
Route::resource('/bangunan', BangunanController::class)->names('bangunan');
