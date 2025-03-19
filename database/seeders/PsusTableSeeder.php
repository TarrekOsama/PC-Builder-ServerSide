<?php

namespace Database\Seeders;

use App\Models\Psu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PsusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Psu::create(['name' => 'Corsair RM850x', 'brand' => 'Corsair', 'form_factor' => 'ATX', 'wattage' => 850, 'efficiency_rating' => '80+ Gold', 'modularity' => 'Fully Modular', 'pcie_6_2_pin' => 4, 'eps_8_pin' => 2, 'length' => 160, 'price' => 149.99, 'stock_quantity' => 10]);
        Psu::create(['name' => 'EVGA SuperNOVA 750 G5', 'brand' => 'EVGA', 'form_factor' => 'ATX', 'wattage' => 750, 'efficiency_rating' => '80+ Gold', 'modularity' => 'Fully Modular', 'pcie_6_2_pin' => 4, 'eps_8_pin' => 2, 'length' => 150, 'price' => 129.99, 'stock_quantity' => 12]);
        Psu::create(['name' => 'Seasonic Focus GX-650', 'brand' => 'Seasonic', 'form_factor' => 'ATX', 'wattage' => 650, 'efficiency_rating' => '80+ Gold', 'modularity' => 'Fully Modular', 'pcie_6_2_pin' => 2, 'eps_8_pin' => 1, 'length' => 140, 'price' => 109.99, 'stock_quantity' => 15]);
        Psu::create(['name' => 'be quiet! Straight Power 11 1000W', 'brand' => 'be quiet!', 'form_factor' => 'ATX', 'wattage' => 1000, 'efficiency_rating' => '80+ Platinum', 'modularity' => 'Fully Modular', 'pcie_6_2_pin' => 6, 'eps_8_pin' => 2, 'length' => 170, 'price' => 209.99, 'stock_quantity' => 8]);
        Psu::create(['name' => 'Cooler Master MWE 550', 'brand' => 'Cooler Master', 'form_factor' => 'ATX', 'wattage' => 550, 'efficiency_rating' => '80+ Bronze', 'modularity' => 'Non-Modular', 'pcie_6_2_pin' => 2, 'eps_8_pin' => 1, 'length' => 140, 'price' => 59.99, 'stock_quantity' => 20]);
    }
}
