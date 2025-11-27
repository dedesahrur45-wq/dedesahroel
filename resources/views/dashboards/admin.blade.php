@extends('layouts.app')

@section('content')
<div class="text-white">

    <h1 class="text-4xl font-bold mb-4">Dashboard Admin</h1>
    <p class="text-gray-400 mb-6">Halo Admin, {{ auth()->user()->name }}</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <a href="{{ route('admin.kategori.index') }}" class="bg-blue-700 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Kelola Kategori</h2>
            <p class="text-gray-300">CRUD kategori</p>
        </a>

        <a href="{{ route('admin.tanah.index') }}" class="bg-blue-700 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Kelola Tanah</h2>
            <p class="text-gray-300">CRUD tanah</p>
        </a>

        <a href="{{ route('admin.bangunan.index') }}" class="bg-blue-700 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Kelola Bangunan</h2>
            <p class="text-gray-300">CRUD bangunan</p>
        </a>

        <a href="{{ route('admin.ruangan.index') }}" class="bg-blue-700 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Kelola Ruangan</h2>
            <p class="text-gray-300">CRUD ruangan</p>
        </a>

        <a href="{{ route('admin.barang.index') }}" class="bg-blue-700 p-6 rounded-2xl shadow hover:scale-105 transition">
            <h2 class="text-xl font-semibold">Kelola Barang</h2>
            <p class="text-gray-300">CRUD barang</p>
        </a>

    </div>

</div>
@endsection
