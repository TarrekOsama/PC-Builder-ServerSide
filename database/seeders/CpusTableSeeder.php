<?php

namespace Database\Seeders;

use App\Models\Cpu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CpusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cpu::create(['name' => 'Intel Core i9-13900K', 'brand' => 'Intel', 'socket_type' => 'LGA 1700', 'cores' => 24, 'threads' => 32, 'base_clock' => 3.0, 'boost_clock' => 5.8, 'tdp' => 125, 'pcie_version' => '5.0', 'integrated_gpu' => true, 'l3_cache' => 36, 'price' => 589.99, 'stock_quantity' => 10]);
        Cpu::create(['name' => 'AMD Ryzen 9 7950X', 'brand' => 'AMD', 'socket_type' => 'AM5', 'cores' => 16, 'threads' => 32, 'base_clock' => 4.5, 'boost_clock' => 5.7, 'tdp' => 170, 'pcie_version' => '5.0', 'integrated_gpu' => true, 'l3_cache' => 64, 'price' => 699.99, 'stock_quantity' => 8]);
        Cpu::create(['name' => 'Intel Core i5-13400', 'brand' => 'Intel', 'socket_type' => 'LGA 1700', 'cores' => 10, 'threads' => 16, 'base_clock' => 2.5, 'boost_clock' => 4.6, 'tdp' => 65, 'pcie_version' => '4.0', 'integrated_gpu' => true, 'l3_cache' => 20, 'price' => 229.99, 'stock_quantity' => 15]);
        Cpu::create(['name' => 'AMD Ryzen 5 7600X', 'brand' => 'AMD', 'socket_type' => 'AM5', 'cores' => 6, 'threads' => 12, 'base_clock' => 4.7, 'boost_clock' => 5.3, 'tdp' => 105, 'pcie_version' => '5.0', 'integrated_gpu' => true, 'l3_cache' => 32, 'price' => 299.99, 'stock_quantity' => 12]);
        Cpu::create(['name' => 'Intel Core i7-13700K', 'brand' => 'Intel', 'socket_type' => 'LGA 1700', 'cores' => 16, 'threads' => 24, 'base_clock' => 3.4, 'boost_clock' => 5.4, 'tdp' => 125, 'pcie_version' => '5.0', 'integrated_gpu' => true, 'l3_cache' => 30, 'price' => 409.99, 'stock_quantity' => 9]);
    }
}
