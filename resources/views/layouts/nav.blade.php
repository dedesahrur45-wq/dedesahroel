<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ url('/') }}">
            <span style="font-size: 24px;">📦</span>
            <span>SIMASET</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('barang.index') }}">📦 Barang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kategori.index') }}">🏷️ Kategori</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tanah.index') }}">🌍 Tanah</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('bangunan.index') }}">🏢 Bangunan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('ruangan.index') }}">🚪 Ruangan</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @if (Auth::check())
                    <li class="nav-item">
                        <span class="nav-link">👤 {{ Auth::user()?->nama ?? 'Pengguna' }}</span>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
