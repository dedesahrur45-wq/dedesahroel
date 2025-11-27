@extends('layouts.app')

@section('title','Dashboard User')

@section('content')
<div class="row g-3 mb-3">
    <h3 class="text-white">Selamat datang, {{ auth()->user()->name }}</h3>
</div>

<div class="row g-3">
    @foreach($counts as $key => $val)
    <div class="col-md-4 col-lg-2">
        <a href="{{ route($key.'.index') }}" class="text-decoration-none">
            <div class="card-counter text-center p-3">
                <div class="h6 text-uppercase">{{ ucfirst($key) }}</div>
                <div class="display-6 fw-bold">{{ $val }}</div>
            </div>
        </a>
    </div>
    @endforeach
</div>

<div class="glass mt-4 p-3">
    <h5>Informasi</h5>
  @extends('layouts.app')

@section('content')
<div class="text-white">

    <h1 class="text-4xl font-bold mb-4">Dashboard User</h1>
    <p class="text-gray-400 mb-6">Selamat datang, {{ auth()->user()->name }}</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Kategori -->
        <a href="{{ route('kategori.index') }}" class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Kategori</h2>
            <p class="text-gray-400">Lihat semua kategori</p>
        </a>

        <!-- Tanah -->
        <a href="{{ route('tanah.index') }}" class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Tanah</h2>
            <p class="text-gray-400">Lihat data tanah</p>
        </a>

        <!-- Bangunan -->
        <a href="{{ route('bangunan.index') }}" class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Bangunan</h2>
            <p class="text-gray-400">Lihat data bangunan</p>
        </a>

        <!-- Ruangan -->
        <a href="{{ route('ruangan.index') }}" class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Ruangan</h2>
            <p class="text-gray-400">Lihat ruangan</p>
        </a>

        <!-- Barang -->
        <a href="{{ route('barang.index') }}" class="bg-gray-800 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Barang</h2>
            <p class="text-gray-400">Lihat data barang</p>
        </a>

    </div>
</div>
@endsection
  <p>Klik salah satu menu untuk melihat data lengkap.</p>
</div>
@endsection
