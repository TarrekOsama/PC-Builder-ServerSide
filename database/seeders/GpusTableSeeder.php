<?php

namespace Database\Seeders;

use App\Models\Gpu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GpusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gpu::create(['name' => 'NVIDIA RTX 4090', 'brand' => 'NVIDIA', 'vram' => 24, 'length' => 304, 'width' => 137, 'slot_width' => 3, 'tdp' => 450, 'pcie_version' => '4.0', 'power_connectors' => '1x 16-pin', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'price' => 1599.99, 'stock_quantity' => 5]);
        Gpu::create(['name' => 'AMD RX 7900 XTX', 'brand' => 'AMD', 'vram' => 24, 'length' => 287, 'width' => 123, 'slot_width' => 2, 'tdp' => 355, 'pcie_version' => '4.0', 'power_connectors' => '2x 8-pin', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'price' => 999.99, 'stock_quantity' => 7]);
        Gpu::create(['name' => 'NVIDIA RTX 4070 Ti', 'brand' => 'NVIDIA', 'vram' => 12, 'length' => 285, 'width' => 112, 'slot_width' => 2, 'tdp' => 285, 'pcie_version' => '4.0', 'power_connectors' => '1x 16-pin', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'price' => 799.99, 'stock_quantity' => 10]);
        Gpu::create(['name' => 'AMD RX 6800 XT', 'brand' => 'AMD', 'vram' => 16, 'length' => 267, 'width' => 120, 'slot_width' => 2, 'tdp' => 300, 'pcie_version' => '4.0', 'power_connectors' => '2x 8-pin', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'price' => 649.99, 'stock_quantity' => 8]);
        Gpu::create(['name' => 'NVIDIA RTX 3060', 'brand' => 'NVIDIA', 'vram' => 12, 'length' => 242, 'width' => 112, 'slot_width' => 2, 'tdp' => 170, 'pcie_version' => '4.0', 'power_connectors' => '1x 8-pin', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'price' => 329.99, 'stock_quantity' => 15]);
    }
}
