<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'ni',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
    ];


    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'nim', 'ni');
    }
    public function dosen()
    {
        return $this->hasOne(dosen::class, 'nip', 'ni');
    }
}
