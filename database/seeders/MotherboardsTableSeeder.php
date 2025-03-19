<?php

namespace Database\Seeders;

use App\Models\Motherboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotherboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Motherboard::create(['name' => 'ASUS ROG Strix Z790-E', 'brand' => 'ASUS', 'socket_type' => 'LGA 1700', 'form_factor' => 'ATX', 'chipset_id' => 1, 'ram_type' => 'DDR5', 'ram_slots' => 4, 'max_ram_speed' => 7200, 'ram_voltage' => 1.35, 'pcie_version' => '5.0', 'm2_slots' => 4, 'sata_ports' => 6, 'price' => 429.99, 'stock_quantity' => 7]);
        Motherboard::create(['name' => 'MSI MAG B760 Tomahawk', 'brand' => 'MSI', 'socket_type' => 'LGA 1700', 'form_factor' => 'ATX', 'chipset_id' => 2, 'ram_type' => 'DDR5', 'ram_slots' => 4, 'max_ram_speed' => 6400, 'ram_voltage' => 1.25, 'pcie_version' => '4.0', 'm2_slots' => 3, 'sata_ports' => 6, 'price' => 189.99, 'stock_quantity' => 10]);
        Motherboard::create(['name' => 'Gigabyte X670 AORUS Elite', 'brand' => 'Gigabyte', 'socket_type' => 'AM5', 'form_factor' => 'ATX', 'chipset_id' => 3, 'ram_type' => 'DDR5', 'ram_slots' => 4, 'max_ram_speed' => 6600, 'ram_voltage' => 1.3, 'pcie_version' => '5.0', 'm2_slots' => 4, 'sata_ports' => 6, 'price' => 299.99, 'stock_quantity' => 8]);
        Motherboard::create(['name' => 'ASRock B650 Steel Legend', 'brand' => 'ASRock', 'socket_type' => 'AM5', 'form_factor' => 'ATX', 'chipset_id' => 4, 'ram_type' => 'DDR5', 'ram_slots' => 4, 'max_ram_speed' => 6200, 'ram_voltage' => 1.25, 'pcie_version' => '4.0', 'm2_slots' => 3, 'sata_ports' => 4, 'price' => 199.99, 'stock_quantity' => 12]);
        Motherboard::create(['name' => 'ASUS TUF Gaming Z690-Plus', 'brand' => 'ASUS', 'socket_type' => 'LGA 1700', 'form_factor' => 'ATX', 'chipset_id' => 5, 'ram_type' => 'DDR5', 'ram_slots' => 4, 'max_ram_speed' => 6000, 'ram_voltage' => 1.25, 'pcie_version' => '5.0', 'm2_slots' => 3, 'sata_ports' => 6, 'price' => 259.99, 'stock_quantity' => 9]);
    }
}
