<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Tanah;
use App\Models\Bangunan;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        $counts = [
            'barang' => Barang::count(),
            'kategori' => Kategori::count(),
            'tanah' => Tanah::count(),
            'bangunan' => Bangunan::count(),
            'ruangan' => Ruangan::count(),
        ];

        // Untuk tampilan list ringkasan (mis. 5 terakhir) bisa ditambahkan
        return view('dashboards.user', compact('counts'));
    }

    public function adminDashboard()
    {
        $counts = [
            'barang' => Barang::count(),
            'kategori' => Kategori::count(),
            'tanah' => Tanah::count(),
            'bangunan' => Bangunan::count(),
            'ruangan' => Ruangan::count(),
        ];

        return view('dashboards.admin', compact('counts'));
    }
}
