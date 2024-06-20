<?php

namespace Database\Seeders;

use App\Models\mahasiswa as MahasiswaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MahasiswaModel::create([
            'fotoprofil' => 'none', // Contoh path default foto profil
            'nama_lengkap' => 'John Doe',
            'nim' => '123456789',
            'angkatan' => '2021',
            'notelp' => '08123456789',
        ]);

        MahasiswaModel::create([
            'fotoprofil' => 'none', // Contoh path default foto profil
            'nama_lengkap' => 'Jane Doe',
            'nim' => '987654321',
            'angkatan' => '2021',
            'notelp' => '08987654321',
        ]);
    }
}
