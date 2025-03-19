<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create(['user_id' => 1, 'build_id' => 1, 'total_cost' => 2500.00, 'status' => 'Pending', 'payment_method' => 'Credit Card', 'payment_status' => 'Pending']);
        Order::create(['user_id' => 2, 'build_id' => 2, 'total_cost' => 1800.00, 'status' => 'Processing', 'payment_method' => 'PayPal', 'payment_status' => 'Completed']);
        Order::create(['user_id' => 3, 'build_id' => 3, 'total_cost' => 900.00, 'status' => 'Shipped', 'payment_method' => 'Credit Card', 'payment_status' => 'Completed', 'tracking_number' => 'TRK123']);
        Order::create(['user_id' => 4, 'build_id' => 4, 'total_cost' => 2000.00, 'status' => 'Delivered', 'payment_method' => 'Debit Card', 'payment_status' => 'Completed', 'tracking_number' => 'TRK456']);
        Order::create(['user_id' => 5, 'build_id' => 5, 'total_cost' => 1200.00, 'status' => 'Cancelled', 'payment_method' => 'Credit Card', 'payment_status' => 'Failed']);
    }
}
