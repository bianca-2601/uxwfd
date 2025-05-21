<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Kolom-kolom yang boleh diisi massal lewat update/create
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password', // biasanya ada password juga
    ];

    // Kolom yang disembunyikan saat diubah ke array atau json
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Tipe data casting otomatis
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
