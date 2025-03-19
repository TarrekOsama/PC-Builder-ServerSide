<?php

namespace Database\Seeders;

use App\Models\Ram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ram::create(['name' => 'Corsair Vengeance DDR5 32GB', 'brand' => 'Corsair', 'type' => 'DDR5', 'speed' => 5600, 'size_per_stick' => 16, 'quantity' => 2, 'voltage' => 1.25, 'cas_latency' => 36, 'price' => 149.99, 'stock_quantity' => 15]);
        Ram::create(['name' => 'G.Skill Trident Z5 RGB 64GB', 'brand' => 'G.Skill', 'type' => 'DDR5', 'speed' => 6000, 'size_per_stick' => 32, 'quantity' => 2, 'voltage' => 1.35, 'cas_latency' => 40, 'price' => 279.99, 'stock_quantity' => 8]);
        Ram::create(['name' => 'Kingston Fury Beast 16GB', 'brand' => 'Kingston', 'type' => 'DDR5', 'speed' => 5200, 'size_per_stick' => 8, 'quantity' => 2, 'voltage' => 1.25, 'cas_latency' => 38, 'price' => 89.99, 'stock_quantity' => 20]);
        Ram::create(['name' => 'TeamGroup T-Force Delta 32GB', 'brand' => 'TeamGroup', 'type' => 'DDR5', 'speed' => 6400, 'size_per_stick' => 16, 'quantity' => 2, 'voltage' => 1.35, 'cas_latency' => 40, 'price' => 179.99, 'stock_quantity' => 10]);
        Ram::create(['name' => 'Patriot Viper Steel 16GB', 'brand' => 'Patriot', 'type' => 'DDR5', 'speed' => 4800, 'size_per_stick' => 8, 'quantity' => 2, 'voltage' => 1.2, 'cas_latency' => 36, 'price' => 79.99, 'stock_quantity' => 12]);
    }
}
