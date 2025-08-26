<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';


    protected $fillable = [
        'namakategori'
    ];

    // Relasi: Kategori hasMany Barang
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
