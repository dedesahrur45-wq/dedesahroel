<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Bangunan extends Model
{
    use HasFactory;

    protected $table = 'bangunan';

    protected $fillable = [
        'namabangunan', 
        'kodebangunan', 
        'tanahid'
    ];

    // Relasi: Bangunan belongsTo Tanah
    public function tanah()
    {
        return $this->belongsTo(Tanah::class);
    }

    // Relasi: Bangunan hasMany Ruangan
    public function ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }
}
