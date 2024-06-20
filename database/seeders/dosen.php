<?php

namespace Database\Seeders;

use App\Models\dosen as ModelsDosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dosen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsDosen::create([
            'fotoprofil' => 'none', // Path foto profil default (opsional)
            'nama_lengkap' => 'Prof. John Doe',
            'nip' => '1234567890', // Sesuaikan dengan NIP yang unik
            'notelp' => '08123456789', // Nomor telepon (opsional)
        ]);

        ModelsDosen::create([
            'fotoprofil' => 'none', // Path foto profil default (opsional)
            'nama_lengkap' => 'Dr. Jane Doe',
            'nip' => '0987654321', // Sesuaikan dengan NIP yang unik
            'notelp' => '08987654321', // Nomor telepon (opsional)
        ]);
    }
}
