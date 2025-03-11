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
        Schema::create('build_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('build_id')->constrained('builds')->onDelete('cascade');
            $table->enum('component_type', ['cpu', 'motherboard', 'ram', 'storage', 'gpu', 'ps_case', 'psu', 'monitor', 'product']);
            $table->integer('component_id');
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('build_components');
    }
};
