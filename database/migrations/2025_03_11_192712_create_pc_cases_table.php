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
        Schema::create('pc_cases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand', 50);
            $table->string('form_factor', 10);
            $table->integer('max_gpu_length');
            $table->integer('max_cooler_height');
            $table->string('psu_form_factor', 20);
            $table->integer('max_psu_length');
            $table->integer('drive_bays_3_5')->default(0);
            $table->integer('drive_bays_2_5')->default(0);
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
        Schema::dropIfExists('pc_cases');
    }
};
