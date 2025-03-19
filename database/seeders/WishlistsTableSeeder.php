<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wishlist::create(['user_id' => 1, 'component_type' => 'cpu', 'component_id' => 2]);
        Wishlist::create(['user_id' => 2, 'component_type' => 'gpu', 'component_id' => 3]);
        Wishlist::create(['user_id' => 3, 'component_type' => 'pc_case', 'component_id' => 4]);
        Wishlist::create(['user_id' => 4, 'component_type' => 'monitor', 'component_id' => 5]);
        Wishlist::create(['user_id' => 5, 'component_type' => 'ram', 'component_id' => 2]);
    }
}
