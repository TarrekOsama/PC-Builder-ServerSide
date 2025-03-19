<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create(['component_type' => 'cpu', 'component_id' => 1, 'stock_quantity' => 10]);
        Inventory::create(['component_type' => 'gpu', 'component_id' => 1, 'stock_quantity' => 5]);
        Inventory::create(['component_type' => 'pc_case', 'component_id' => 1, 'stock_quantity' => 20]);
        Inventory::create(['component_type' => 'monitor', 'component_id' => 1, 'stock_quantity' => 8]);
        Inventory::create(['component_type' => 'ram', 'component_id' => 1, 'stock_quantity' => 15]);
    }
}
