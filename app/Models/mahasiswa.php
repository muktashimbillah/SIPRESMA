<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $guard = 'mahasiswa';
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'fotoprofil',
        'nama_lengkap',
        'angkatan',
        'ruang',
        'notelp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ni', 'nim');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'nim', 'nim');
    }
}
