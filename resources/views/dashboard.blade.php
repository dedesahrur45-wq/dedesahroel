@extends('layouts.app')

@section('content')
<style>
    /* Reset dasar dan font */
body {
    font-family: 'Inter', sans-serif;
    background-color: #f5f6fa;
    color: #333;
    line-height: 1.6;
}

a {
    text-decoration: none;
    color: inherit;
}

/* Dashboard Header */
.dashboard-header {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    padding: 40px 0;
    text-align: center;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.dashboard-title {
    font-size: 2rem;
    font-weight: 700;
}

.dashboard-subtitle {
    font-size: 1rem;
    margin-top: 8px;
    color: rgba(255,255,255,0.85);
}

/* Success Alert */
.success-alert {
    background-color: #e6f4ea;
    color: #188038;
    border-radius: 8px;
    padding: 12px 15px;
    font-size: 0.95rem;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Dashboard Grid */
.grid {
    display: grid;
    gap: 20px;
}

@media (min-width: 768px) {
    .grid-cols-2 {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .grid-cols-3 {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Cards */
.card {
    background-color: #fff;
    border-radius: 12px;
    padding: 25px 20px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.card-icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
}

.card-description {
    font-size: 0.95rem;
    color: #555;
    margin-bottom: 15px;
}

.card-link {
    font-weight: 600;
    color: #764ba2;
    transition: color 0.3s ease;
}

.card-link:hover {
    color: #5a3490;
}

/* Info Box */
.info-box {
    background-color: #fff;
    border-radius: 12px;
    padding: 25px 20px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.info-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.info-list {
    list-style: none;
    padding-left: 0;
}

.info-list li {
    font-size: 0.95rem;
    color: #555;
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.info-list li:last-child {
    border-bottom: none;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Utilities */
.mb-6 {
    margin-bottom: 1.5rem;
}

.mb-12 {
    margin-bottom: 3rem;
}

.py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
}

</style>
<div class="dashboard-header">
    <div class="container mx-auto px-6">
        <h1 class="dashboard-title">Selamat Datang, {{ Auth::user()?->nama ?? 'derul' }}! 👋</h1>
        <p class="dashboard-subtitle">Kelola aset sekolah Anda dengan mudah dan efisien</p>
    </div>
</div>

<div class="container mx-auto px-6 py-12">
    @if (session('success'))
        <div class="success-alert mb-6">
            ✓ {{ session('success') }}
        </div>
    @endif

    <!-- Dashboard Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        
        <!-- Barang Card -->
        <div class="card">
            <div class="card-icon">📦</div>
            <h3 class="card-title">Barang</h3>
            <p class="card-description">Kelola semua barang aset sekolah Anda dengan detail lengkap dan terorganisir.</p>
            <a href="{{ route('barang.index') }}" class="card-link">
                Lihat Barang →
            </a>
        </div>

        <!-- Kategori Card -->
        <div class="card">
            <div class="card-icon">🏷️</div>
            <h3 class="card-title">Kategori</h3>
            <p class="card-description">Atur dan kelola kategori barang untuk sistem klasifikasi yang lebih baik.</p>
            <a href="{{ route('kategori.index') }}" class="card-link">
                Lihat Kategori →
            </a>
        </div>

        <!-- Tanah Card -->
        <div class="card">
            <div class="card-icon">🌍</div>
            <h3 class="card-title">Tanah</h3>
            <p class="card-description">Kelola data tanah aset sekolah dengan informasi lokasi dan luas yang akurat.</p>
            <a href="{{ route('tanah.index') }}" class="card-link">
                Lihat Tanah →
            </a>
        </div>

        <!-- Bangunan Card -->
        <div class="card">
            <div class="card-icon">🏢</div>
            <h3 class="card-title">Bangunan</h3>
            <p class="card-description">Kelola data bangunan dengan informasi struktur dan kondisi bangunan.</p>
            <a href="{{ route('bangunan.index') }}" class="card-link">
                Lihat Bangunan →
            </a>
        </div>

        <!-- Ruangan Card -->
        <div class="card">
            <div class="card-icon">🚪</div>
            <h3 class="card-title">Ruangan</h3>
            <p class="card-description">Kelola data ruangan sekolah dengan informasi lokasi dan ketersediaan.</p>
            <a href="{{ route('ruangan.index') }}" class="card-link">
                Lihat Ruangan →
            </a>
        </div>

        <!-- User Card -->
        <div class="card">
            <div class="card-icon">👤</div>
            <h3 class="card-title">User</h3>
            <p class="card-description">Kelola pengguna sistem dan atur akses berdasarkan role.</p>
            <a href="{{ route('user.index') }}" class="card-link">
                Lihat User →
            </a>
        </div>

    </div>

    <!-- Info Box -->
    <div class="info-box">
        <h3 class="info-title">📊 Informasi Sistem</h3>
        <ul class="info-list">
            <li><strong>Status:</strong> Online dan siap digunakan</li>
            <li><strong>Role Anda:</strong> {{ Auth::user()?->role ?? 'Tamu' }}</li>
            <li><strong>Email:</strong> {{ Auth::user()?->email ?? '—' }}</li>
            <li><strong>Last Updated:</strong> {{ Auth::user()?->updated_at?->format('d-m-Y H:i') ?? 'Baru pertama kali login' }}</li>
        </ul>
    </div>
</div>

@endsection
