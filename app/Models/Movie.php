<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaFilm',
        'genre',
        'imageMovie',
        'jamTayang',
        'jamAkhir',
        'tanggalTayang',
        'tanggalAkhir',
        'harga',
        'sinopsis',
    ];
    
    
}
