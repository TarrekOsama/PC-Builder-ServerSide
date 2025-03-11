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
        Schema::create('storages', function (Blueprint $table) {
            $table->id('storage_id');
            $table->string('name');
            $table->string('brand', 50);
            $table->enum('type', ['NVMe', 'SATA SSD', 'HDD']);
            $table->integer('capacity');
            $table->string('interface', 50)->nullable();
            $table->string('form_factor', 50)->nullable();
            $table->integer('read_speed')->nullable();
            $table->integer('write_speed')->nullable();
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
        Schema::dropIfExists('storages');
    }
};
