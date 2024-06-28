<?php

namespace Database\Seeders;

use App\Models\categori as Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category' => 'R-1/TR 900 VA',
            'price' => 1352.00,
            'description' => 'Tarif listrik per kWh untuk pelanggan rumah tangga kecil dengan daya 900 VA',
        ]);

        Category::create([
            'category' => 'R-1/TR 1300 VA',
            'price' => 1444.70,
            'description' => 'Tarif listrik per kWh untuk pelanggan rumah tangga kecil dengan daya 1300 VA',
        ]);

        Category::create([
            'category' => 'R-1/TR 2200 VA',
            'price' => 1444.70,
            'description' => 'Tarif listrik per kWh untuk pelanggan rumah tangga kecil dengan daya 2200 VA',
        ]);

        Category::create([
            'category' => 'R-2/TR 3500-5500 VA',
            'price' => 1699.53,
            'description' => 'Tarif listrik per kWh untuk pelanggan rumah tangga menengah dengan daya 3500-5500 VA',
        ]);

        Category::create([
            'category' => 'R-3/TR 6600 VA ke atas',
            'price' => 1699.53,
            'description' => 'Tarif listrik per kWh untuk pelanggan rumah tangga besar dengan daya 6600 VA ke atas',
        ]);

        Category::create([
            'category' => 'B-2/TR 6600 VA - 200 kVA',
            'price' => 1444.70,
            'description' => 'Tarif listrik per kWh untuk pelanggan bisnis menengah dengan daya 6600 VA hingga 200 kVA',
        ]);

        Category::create([
            'category' => 'P-1/TR 6600 VA - 200 kVA',
            'price' => 1699.53,
            'description' => 'Tarif listrik per kWh untuk keperluan kantor pemerintah sedang dengan daya 6600 VA hingga 200 kVA',
        ]);

        Category::create([
            'category' => 'P-3/TR di atas 200 kVA',
            'price' => 1699.53,
            'description' => 'Tarif listrik per kWh untuk keperluan penerangan jalan umum dengan daya di atas 200 kVA',
        ]);
    }
}
