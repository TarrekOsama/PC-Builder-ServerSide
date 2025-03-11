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
        Schema::create('psus', function (Blueprint $table) {
            $table->id('psu_id');
            $table->string('name');
            $table->string('brand', 50);
            $table->string('form_factor', 10);
            $table->integer('wattage');
            $table->string('efficiency_rating', 10);
            $table->string('modularity', 20);
            $table->integer('pcie_6_2_pin')->default(0);
            $table->integer('eps_8_pin')->default(0);
            $table->integer('length');
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity')->default(0);
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psus');
    }
};
