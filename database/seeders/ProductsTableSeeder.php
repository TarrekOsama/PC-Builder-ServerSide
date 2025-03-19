<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Logitech G Pro X Mouse', 'brand' => 'Logitech', 'category' => 'mouse', 'description' => 'Wireless gaming mouse', 'price' => 129.99, 'stock_quantity' => 15]);
        Product::create(['name' => 'Razer BlackWidow V3 Keyboard', 'brand' => 'Razer', 'category' => 'keyboard', 'description' => 'Mechanical RGB keyboard', 'price' => 139.99, 'stock_quantity' => 10]);
        Product::create(['name' => 'HyperX Cloud II Headset', 'brand' => 'HyperX', 'category' => 'headset', 'description' => '7.1 surround sound headset', 'price' => 99.99, 'stock_quantity' => 12]);
        Product::create(['name' => 'Bose SoundLink Speaker', 'brand' => 'Bose', 'category' => 'speaker', 'description' => 'Portable Bluetooth speaker', 'price' => 119.99, 'stock_quantity' => 8]);
        Product::create(['name' => 'Logitech C920 Webcam', 'brand' => 'Logitech', 'category' => 'webcam', 'description' => '1080p webcam', 'price' => 79.99, 'stock_quantity' => 20]);
    }
}
