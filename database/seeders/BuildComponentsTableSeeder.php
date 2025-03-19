<?php

namespace Database\Seeders;

use App\Models\BuildComponent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BuildComponent::create(['build_id' => 1, 'component_type' => 'cpu', 'component_id' => 1, 'quantity' => 1]);
        BuildComponent::create(['build_id' => 1, 'component_type' => 'motherboard', 'component_id' => 1, 'quantity' => 1]);
        BuildComponent::create(['build_id' => 1, 'component_type' => 'gpu', 'component_id' => 1, 'quantity' => 1]);
        BuildComponent::create(['build_id' => 2, 'component_type' => 'cpu', 'component_id' => 3, 'quantity' => 1]);
        BuildComponent::create(['build_id' => 2, 'component_type' => 'ram', 'component_id' => 2, 'quantity' => 1]);
    }
}
