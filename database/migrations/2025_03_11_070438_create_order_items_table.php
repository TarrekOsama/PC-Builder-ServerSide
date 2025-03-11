<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->foreignId('order_id')->constrained('orders','order_id')->onDelete('cascade');
            $table->enum('component_type', ['cpu', 'motherboard', 'ram', 'storage', 'gpu', 'case', 'psu', 'monitor', 'product']);
            $table->integer('component_id');
            $table->integer('quantity')->default(1);
            $table->decimal('price_at_purchase', 10, 2);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
