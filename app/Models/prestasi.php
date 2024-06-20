<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    use HasFactory;

    protected $guard = 'prestasi';
    protected $table = 'prestasi';

    protected $fillable = [
        'nim',
        'nama_kegiatan',
        'tingkat',
        'akademik',
        'juara',
        'tanggal_kegiatan',
        'bukti_kegiatan',
        'foto_diri',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
}
