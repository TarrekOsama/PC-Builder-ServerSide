<?php

namespace Database\Seeders;

use App\Models\Pc_case;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pc_casesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pc_case::create(['name' => 'NZXT H510', 'brand' => 'NZXT', 'form_factor' => 'ATX', 'max_gpu_length' => 381, 'max_cooler_height' => 165, 'psu_form_factor' => 'ATX', 'max_psu_length' => 200, 'drive_bays_3_5' => 2, 'drive_bays_2_5' => 2, 'price' => 79.99, 'stock_quantity' => 20]);
        Pc_case::create(['name' => 'Corsair 4000D Airflow', 'brand' => 'Corsair', 'form_factor' => 'ATX', 'max_gpu_length' => 360, 'max_cooler_height' => 170, 'psu_form_factor' => 'ATX', 'max_psu_length' => 220, 'drive_bays_3_5' => 2, 'drive_bays_2_5' => 2, 'price' => 104.99, 'stock_quantity' => 15]);
        Pc_case::create(['name' => 'Fractal Design Meshify C', 'brand' => 'Fractal Design', 'form_factor' => 'ATX', 'max_gpu_length' => 315, 'max_cooler_height' => 172, 'psu_form_factor' => 'ATX', 'max_psu_length' => 175, 'drive_bays_3_5' => 2, 'drive_bays_2_5' => 3, 'price' => 99.99, 'stock_quantity' => 12]);
        Pc_case::create(['name' => 'Lian Li PC-O11 Dynamic', 'brand' => 'Lian Li', 'form_factor' => 'ATX', 'max_gpu_length' => 420, 'max_cooler_height' => 155, 'psu_form_factor' => 'ATX', 'max_psu_length' => 210, 'drive_bays_3_5' => 2, 'drive_bays_2_5' => 4, 'price' => 149.99, 'stock_quantity' => 10]);
        Pc_case::create(['name' => 'Cooler Master MasterBox Q300L', 'brand' => 'Cooler Master', 'form_factor' => 'Micro ATX', 'max_gpu_length' => 360, 'max_cooler_height' => 157, 'psu_form_factor' => 'ATX', 'max_psu_length' => 160, 'drive_bays_3_5' => 1, 'drive_bays_2_5' => 2, 'price' => 49.99, 'stock_quantity' => 18]);
    }
}
