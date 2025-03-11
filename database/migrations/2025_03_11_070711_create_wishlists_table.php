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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id('wishlist_id');
            $table->foreignId('user_id')->constrained('users','user_id')->onDelete('cascade');
            $table->enum('component_type', ['cpu', 'motherboard', 'ram', 'storage', 'gpu', 'case', 'psu', 'monitor', 'product']);
            $table->integer('component_id');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
