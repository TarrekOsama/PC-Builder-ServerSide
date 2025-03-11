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
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand', 50);
            $table->string('socket_type', 20);
            $table->string('form_factor', 10);
            $table->foreignId('chipset_id')->constrained('chipsets')->onDelete('restrict');
            $table->string('ram_type', 5);
            $table->integer('ram_slots');
            $table->integer('max_ram_speed');
            $table->decimal('ram_voltage', 3, 2);
            $table->string('pcie_version', 10)->nullable();
            $table->integer('m2_slots')->default(0);
            $table->integer('sata_ports')->default(0);
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
        Schema::dropIfExists('motherboards');
    }
};
