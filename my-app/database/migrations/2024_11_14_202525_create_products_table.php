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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable(); // Make image_path nullable
            $table->string('product_type');
            $table->string('name');
            $table->string('platform');
            $table->integer('price');
            $table->integer('stock_quantity');
            $table->integer('units_sold')->default(0);
            $table->text('description')->nullable(); // Add description column
            $table->timestamps(); // Adding timestamps (created_at and updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
