<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItem::create(['order_id' => 1, 'component_type' => 'cpu', 'component_id' => 1, 'quantity' => 1, 'price_at_purchase' => 589.99]);
        OrderItem::create(['order_id' => 1, 'component_type' => 'gpu', 'component_id' => 1, 'quantity' => 1, 'price_at_purchase' => 1599.99]);
        OrderItem::create(['order_id' => 2, 'component_type' => 'cpu', 'component_id' => 3, 'quantity' => 1, 'price_at_purchase' => 229.99]);
        OrderItem::create(['order_id' => 3, 'component_type' => 'pc_case', 'component_id' => 3, 'quantity' => 1, 'price_at_purchase' => 99.99]);
        OrderItem::create(['order_id' => 4, 'component_type' => 'monitor', 'component_id' => 4, 'quantity' => 1, 'price_at_purchase' => 599.99]);
    }
}
