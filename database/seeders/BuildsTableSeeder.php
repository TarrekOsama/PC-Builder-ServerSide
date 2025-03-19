<?php

namespace Database\Seeders;

use App\Models\Build;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Build::create(['user_id' => 1, 'name' => 'Gaming Rig', 'total_cost' => 2500.00, 'total_power_consumption' => 650]);
        Build::create(['user_id' => 2, 'name' => 'Workstation', 'total_cost' => 1800.00, 'total_power_consumption' => 400]);
        Build::create(['user_id' => 3, 'name' => 'Budget Build', 'total_cost' => 900.00, 'total_power_consumption' => 300]);
        Build::create(['user_id' => 4, 'name' => 'Streaming PC', 'total_cost' => 2000.00, 'total_power_consumption' => 500]);
        Build::create(['user_id' => 5, 'name' => 'Mini ITX Build', 'total_cost' => 1200.00, 'total_power_consumption' => 350]);
    }
}
