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
        Schema::create('chipsets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('brand', 10);
            $table->string('supported_socket', 20)->nullable();
            $table->string('pcie_version', 10)->nullable();
            $table->boolean('overclocking_support')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chipsets');
    }
};
