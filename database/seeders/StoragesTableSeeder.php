<?php

namespace Database\Seeders;

use App\Models\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::create(['name' => 'Samsung 990 Pro 1TB', 'brand' => 'Samsung', 'type' => 'NVMe', 'capacity' => 1000, 'interface' => 'PCIe 4.0', 'form_factor' => 'M.2 2280', 'read_speed' => 7450, 'write_speed' => 6900, 'price' => 169.99, 'stock_quantity' => 20]);
        Storage::create(['name' => 'WD Black SN850X 2TB', 'brand' => 'Western Digital', 'type' => 'NVMe', 'capacity' => 2000, 'interface' => 'PCIe 4.0', 'form_factor' => 'M.2 2280', 'read_speed' => 7300, 'write_speed' => 6600, 'price' => 289.99, 'stock_quantity' => 10]);
        Storage::create(['name' => 'Crucial MX500 1TB', 'brand' => 'Crucial', 'type' => 'SATA SSD', 'capacity' => 1000, 'interface' => 'SATA III', 'form_factor' => '2.5"', 'read_speed' => 560, 'write_speed' => 510, 'price' => 99.99, 'stock_quantity' => 15]);
        Storage::create(['name' => 'Seagate Barracuda 4TB', 'brand' => 'Seagate', 'type' => 'HDD', 'capacity' => 4000, 'interface' => 'SATA III', 'form_factor' => '3.5"', 'read_speed' => 190, 'write_speed' => 180, 'price' => 89.99, 'stock_quantity' => 12]);
        Storage::create(['name' => 'Samsung 870 EVO 500GB', 'brand' => 'Samsung', 'type' => 'SATA SSD', 'capacity' => 500, 'interface' => 'SATA III', 'form_factor' => '2.5"', 'read_speed' => 560, 'write_speed' => 530, 'price' => 79.99, 'stock_quantity' => 18]);
    }
}
