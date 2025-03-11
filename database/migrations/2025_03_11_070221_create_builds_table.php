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
        Schema::create('builds', function (Blueprint $table) {
            $table->id('build_id');
            $table->foreignId('user_id')->constrained('users','user_id')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->decimal('total_cost', 10, 2)->default(0.00);
            $table->integer('total_power_consumption')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('builds');
    }
};
