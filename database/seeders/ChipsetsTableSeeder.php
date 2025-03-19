<?php

namespace Database\Seeders;

use App\Models\Chipset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChipsetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Chipset::create(['name' => 'Z790', 'brand' => 'Intel', 'supported_socket' => 'LGA 1700', 'pcie_version' => '5.0', 'overclocking_support' => true]);
        Chipset::create(['name' => 'B760', 'brand' => 'Intel', 'supported_socket' => 'LGA 1700', 'pcie_version' => '4.0', 'overclocking_support' => false]);
        Chipset::create(['name' => 'X670', 'brand' => 'AMD', 'supported_socket' => 'AM5', 'pcie_version' => '5.0', 'overclocking_support' => true]);
        Chipset::create(['name' => 'B650', 'brand' => 'AMD', 'supported_socket' => 'AM5', 'pcie_version' => '4.0', 'overclocking_support' => false]);
        Chipset::create(['name' => 'Z690', 'brand' => 'Intel', 'supported_socket' => 'LGA 1700', 'pcie_version' => '5.0', 'overclocking_support' => true]);
    }
}
