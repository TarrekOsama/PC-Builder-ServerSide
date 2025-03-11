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
        Schema::create('monitors', function (Blueprint $table) {
            $table->id('monitor_id');
            $table->string('name');
            $table->string('brand', 50);
            $table->decimal('screen_size', 4, 1);
            $table->string('resolution', 20);
            $table->integer('refresh_rate');
            $table->integer('response_time');
            $table->enum('panel_type', ['IPS', 'TN', 'VA']);
            $table->json('ports');
            $table->json('gpu_compatibility');
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
        Schema::dropIfExists('monitors');
    }
};
