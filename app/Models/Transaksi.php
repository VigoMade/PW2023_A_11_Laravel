<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

     protected $fillable = [
        'id_user',
        'id_movie', 
        'seat',
        'totalSeat',
        'totBayar',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'id_movie', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
