<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ModelsUser::create([
            'email' => 'mahasiswa@example.com',
            'password' => bcrypt('password'), // Ganti dengan password yang diinginkan
            'role' => 'mahasiswa',
            'ni' => '123456789', // Sesuaikan dengan nim mahasiswa
        ]);

        // Seeder untuk admin
        ModelsUser::create([
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Ganti dengan password yang diinginkan
            'role' => 'admin',
        ]);

        // Seeder untuk dosen
        ModelsUser::create([
            'email' => 'dosen@example.com',
            'password' => bcrypt('password'), // Ganti dengan password yang diinginkan
            'role' => 'dosen',
            'ni' => '0987654321', // Sesuaikan dengan nip dosen
        ]);
    }
}
