<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Bill;
use App\Models\MeterReading;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Panggil seeder kategori
        $this->call(CategorySeeder::class);

        // Membuat user admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@pln.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Membuat beberapa user biasa
        $users = User::factory()->count(5)->create();

        // Mengisi data tagihan dan pengukuran kWh untuk setiap user
        foreach ($users as $user) {
            // Membuat beberapa tagihan untuk setiap user
            for ($i = 0; $i < 3; $i++) {
                Bill::create([
                    'user_id' => $user->id,
                    'amount' => rand(50, 500), // Jumlah tagihan acak antara 50 dan 500
                    'due_date' => Carbon::now()->addDays(rand(1, 30)), // Tagihan jatuh tempo acak dalam 30 hari
                    'paid_status' => rand(0, 1), // Status pembayaran acak (0: belum dibayar, 1: sudah dibayar)
                    'paid_at' => rand(0, 1) ? Carbon::now()->subDays(rand(1, 30)) : null, // Tanggal pembayaran acak dalam 30 hari terakhir
                ]);
            }

            // Membuat beberapa pengukuran kWh untuk setiap user
            for ($j = 0; $j < 12; $j++) {
                MeterReading::create([
                    'user_id' => $user->id,
                    'category_id' => rand(1, 8), // Pilih secara acak dari kategori yang sudah ada
                    'reading_date' => Carbon::now()->subMonths(12)->addMonths(rand(0, 11)), // Tanggal pengukuran kWh dalam 12 bulan terakhir
                ]);
            }
        }
    }
}
