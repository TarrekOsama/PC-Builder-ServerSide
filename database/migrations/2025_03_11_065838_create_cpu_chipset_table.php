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
        Schema::create('cpu_chipset', function (Blueprint $table) {
            $table->foreignId('cpu_id')->constrained('cpus','cpu_id')->onDelete('cascade');
            $table->foreignId('chipset_id')->constrained('chipsets','chipset_id')->onDelete('cascade');
            $table->primary(['cpu_id', 'chipset_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpu_chipset');
    }
};
