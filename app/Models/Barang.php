<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory;
    protected $table = 'barang';
    

    protected $fillable = [
    'namabarang',
    'kodeinventaris',
    'kategoriid',
    'ruanganid',   
    'tahunpengadaan',
    'sumberdana',
    'kondisi',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // Relasi: Barang belongsTo Ruangan
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
?>