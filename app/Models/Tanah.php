<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanah extends Model
{
    use HasFactory;

    protected $table = 'tanah';

    protected $fillable = [
    'namatanah',
     'kodetanah',
     'luas', 
     'nosertifikat'
    ];

    // Relasi: Tanah hasMany Bangunan
    public function bangunan()
    {
        return $this->hasMany(Bangunan::class);
    }

}
