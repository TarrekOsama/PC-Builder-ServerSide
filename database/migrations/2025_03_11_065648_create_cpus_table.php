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
        Schema::create('cpus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand', 50);
            $table->string('socket_type', 20);
            $table->integer('cores');
            $table->integer('threads');
            $table->decimal('base_clock', 4, 2);
            $table->decimal('boost_clock', 4, 2)->nullable();
            $table->integer('tdp');
            $table->string('pcie_version', 10)->nullable();
            $table->boolean('integrated_gpu')->default(false);
            $table->integer('l3_cache')->nullable();
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
        Schema::dropIfExists('cpus');
    }
};
