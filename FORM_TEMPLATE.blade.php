<!-- ========================================
     SIMASET Sekolah - Standard Form Template
     Untuk CRUD Form (Create/Edit)
     ======================================== -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form CRUD - SIMASET</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    @extends('layouts.app')

    @section('content')

    <div class="container mx-auto px-6 py-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ isset($item) ? 'Edit Barang' : 'Tambah Barang' }}</h1>
            <p class="text-gray-600">Isi semua field yang diperlukan dengan informasi yang akurat</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-16px shadow-md border border-gray-200 overflow-hidden max-w-3xl">
            
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-6">
                <h2 class="text-xl font-bold text-white">{{ isset($item) ? 'Form Edit' : 'Form Tambah Baru' }}</h2>
            </div>

            <!-- Form Body -->
            <div class="p-8">
                @if ($errors->any())
                    <div class="error-alert mb-6">
                        <p class="error-title">Terjadi kesalahan validasi:</p>
                        <ul class="error-list">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ isset($item) ? route('barang.update', $item) : route('barang.store') }}" 
                      method="POST" 
                      enctype="multipart/form-data">
                    @csrf
                    @if (isset($item))
                        @method('PUT')
                    @endif

                    <!-- Row 1: Nama & Kategori -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Nama Barang -->
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Barang <span class="text-red-500">*</span></label>
                            <input 
                                type="text" 
                                id="nama" 
                                name="nama" 
                                class="form-input"
                                placeholder="Masukkan nama barang"
                                value="{{ old('nama', $item->nama ?? '') }}"
                                required
                            >
                            @error('nama')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="form-group">
                            <label for="kategori_id" class="form-label">Kategori <span class="text-red-500">*</span></label>
                            <select 
                                id="kategori_id" 
                                name="kategori_id" 
                                class="form-input"
                                required
                            >
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($kategoris as $kategori)
                                    <option 
                                        value="{{ $kategori->id }}"
                                        {{ old('kategori_id', $item->kategori_id ?? '') == $kategori->id ? 'selected' : '' }}
                                    >
                                        {{ $kategori->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Row 2: Jumlah & Harga -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Jumlah -->
                        <div class="form-group">
                            <label for="jumlah" class="form-label">Jumlah <span class="text-red-500">*</span></label>
                            <input 
                                type="number" 
                                id="jumlah" 
                                name="jumlah" 
                                class="form-input"
                                placeholder="Masukkan jumlah"
                                value="{{ old('jumlah', $item->jumlah ?? '') }}"
                                min="0"
                                required
                            >
                            @error('jumlah')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga (Rp) <span class="text-red-500">*</span></label>
                            <input 
                                type="number" 
                                id="harga" 
                                name="harga" 
                                class="form-input"
                                placeholder="Masukkan harga"
                                value="{{ old('harga', $item->harga ?? '') }}"
                                min="0"
                                required
                            >
                            @error('harga')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Row 3: Kondisi & Status -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Kondisi -->
                        <div class="form-group">
                            <label for="kondisi" class="form-label">Kondisi <span class="text-red-500">*</span></label>
                            <select 
                                id="kondisi" 
                                name="kondisi" 
                                class="form-input"
                                required
                            >
                                <option value="">-- Pilih Kondisi --</option>
                                <option value="baik" {{ old('kondisi', $item->kondisi ?? '') == 'baik' ? 'selected' : '' }}>Baik</option>
                                <option value="cukup" {{ old('kondisi', $item->kondisi ?? '') == 'cukup' ? 'selected' : '' }}>Cukup</option>
                                <option value="buruk" {{ old('kondisi', $item->kondisi ?? '') == 'buruk' ? 'selected' : '' }}>Buruk</option>
                            </select>
                            @error('kondisi')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status" class="form-label">Status <span class="text-red-500">*</span></label>
                            <select 
                                id="status" 
                                name="status" 
                                class="form-input"
                                required
                            >
                                <option value="">-- Pilih Status --</option>
                                <option value="aktif" {{ old('status', $item->status ?? '') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="nonaktif" {{ old('status', $item->status ?? '') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                            @error('status')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Row 4: Deskripsi -->
                    <div class="form-group mb-6">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea 
                            id="deskripsi" 
                            name="deskripsi" 
                            class="form-input"
                            placeholder="Masukkan deskripsi barang"
                            rows="4"
                        >{{ old('deskripsi', $item->deskripsi ?? '') }}</textarea>
                        @error('deskripsi')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Form Actions -->
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
                        <button 
                            type="submit" 
                            class="btn btn-primary"
                        >
                            {{ isset($item) ? '💾 Update Barang' : '✚ Tambah Barang' }}
                        </button>
                        <a 
                            href="{{ route('barang.index') }}" 
                            class="btn bg-gray-400 text-white hover:bg-gray-500"
                        >
                            ✕ Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Info Box -->
        <div class="info-box mt-8">
            <h3 class="info-title">ℹ️ Informasi Penting</h3>
            <ul class="info-list">
                <li>Semua field yang diberi tanda <span class="text-red-500">*</span> wajib diisi</li>
                <li>Nama barang harus unik dan tidak boleh duplikat</li>
                <li>Harga harus berupa angka positif</li>
                <li>Deskripsi opsional tetapi disarankan untuk informasi lebih lengkap</li>
            </ul>
        </div>
    </div>

    @endsection
</body>
</html>
