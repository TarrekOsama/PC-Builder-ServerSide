<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::create(['user_id' => 1, 'message' => 'Your order has shipped!', 'is_read' => false]);
        Notification::create(['user_id' => 2, 'message' => 'New CPU in stock!', 'is_read' => true]);
        Notification::create(['user_id' => 3, 'message' => 'Price drop on RTX 4090!', 'is_read' => false]);
        Notification::create(['user_id' => 4, 'message' => 'Build completed!', 'is_read' => true]);
        Notification::create(['user_id' => 5, 'message' => 'Order cancelled.', 'is_read' => false]);
    }
}
