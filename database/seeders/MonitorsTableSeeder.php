<?php

namespace Database\Seeders;

use App\Models\Monitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monitor::create(['name' => 'Dell UltraSharp U2723QE', 'brand' => 'Dell', 'screen_size' => 27.0, 'resolution' => '3840x2160', 'refresh_rate' => 60, 'response_time' => 5, 'panel_type' => 'IPS', 'ports' => json_encode(['HDMI', 'DisplayPort', 'USB-C']), 'gpu_compatibility' => json_encode(['HDMI', 'DisplayPort']), 'price' => 579.99, 'stock_quantity' => 8]);
        Monitor::create(['name' => 'ASUS TUF VG27AQ', 'brand' => 'ASUS', 'screen_size' => 27.0, 'resolution' => '2560x1440', 'refresh_rate' => 165, 'response_time' => 1, 'panel_type' => 'IPS', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'gpu_compatibility' => json_encode(['HDMI', 'DisplayPort']), 'price' => 349.99, 'stock_quantity' => 12]);
        Monitor::create(['name' => 'LG 32GN650-B', 'brand' => 'LG', 'screen_size' => 32.0, 'resolution' => '2560x1440', 'refresh_rate' => 165, 'response_time' => 1, 'panel_type' => 'VA', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'gpu_compatibility' => json_encode(['HDMI', 'DisplayPort']), 'price' => 299.99, 'stock_quantity' => 10]);
        Monitor::create(['name' => 'Samsung Odyssey G7', 'brand' => 'Samsung', 'screen_size' => 27.0, 'resolution' => '2560x1440', 'refresh_rate' => 240, 'response_time' => 1, 'panel_type' => 'VA', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'gpu_compatibility' => json_encode(['HDMI', 'DisplayPort']), 'price' => 599.99, 'stock_quantity' => 6]);
        Monitor::create(['name' => 'Acer Nitro XV272U', 'brand' => 'Acer', 'screen_size' => 27.0, 'resolution' => '2560x1440', 'refresh_rate' => 170, 'response_time' => 1, 'panel_type' => 'IPS', 'ports' => json_encode(['HDMI', 'DisplayPort']), 'gpu_compatibility' => json_encode(['HDMI', 'DisplayPort']), 'price' => 249.99, 'stock_quantity' => 15]);
    }
}
