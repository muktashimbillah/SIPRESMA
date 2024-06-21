<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';

    protected $fillable = [
        'email',
        'ni',
        'role',
        'password',
    ];

    // Kolom yang disembunyikan saat serialisasi
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    // Kolom yang harus dikonversi ke tipe data asli
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
