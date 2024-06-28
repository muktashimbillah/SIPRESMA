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

        // Memanggil seeder untuk tabel users
        $this->call(CategorySeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
