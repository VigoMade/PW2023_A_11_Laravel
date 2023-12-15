<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'active',
        'verify_key',
    ];
}
