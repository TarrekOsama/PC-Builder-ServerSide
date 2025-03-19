<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create(['user_id' => 1, 'component_type' => 'cpu', 'component_id' => 1, 'rating' => 5, 'comment' => 'Amazing performance!']);
        Review::create(['user_id' => 2, 'component_type' => 'gpu', 'component_id' => 2, 'rating' => 4, 'comment' => 'Great value for price.']);
        Review::create(['user_id' => 3, 'component_type' => 'pc_case', 'component_id' => 3, 'rating' => 5, 'comment' => 'Love the airflow!']);
        Review::create(['user_id' => 4, 'component_type' => 'monitor', 'component_id' => 4, 'rating' => 5, 'comment' => 'Stunning display!']);
        Review::create(['user_id' => 5, 'component_type' => 'ram', 'component_id' => 1, 'rating' => 3, 'comment' => 'Decent but pricey.']);
    }
}
