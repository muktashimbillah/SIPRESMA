<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder untuk tabel dosen
        $this->call(dosen::class);

        // Memanggil seeder untuk tabel mahasiswa
        $this->call(mahasiswa::class);

        // Memanggil seeder untuk tabel users
        $this->call(user::class);
    }
}
