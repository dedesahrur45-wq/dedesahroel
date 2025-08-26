<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';

    protected $fillable = [
    'namaruangan', 
    'koderuangan', 
    'luas'
];

    // Relasi: Ruangan hasMany Barang
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    // Relasi: Ruangan belongsTo Bangunan
    public function bangunan()
    {
        return $this->belongsTo(Bangunan::class);
    }
}
