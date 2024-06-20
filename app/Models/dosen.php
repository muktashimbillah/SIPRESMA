<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $guard = 'dosen';
    protected $table = 'dosen';

    protected $fillable = [
        'nip',
        'nama_lengkap',
        'fotoprofil',
        'notelp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ni', 'nip');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'nim', 'nip');
    }
}
