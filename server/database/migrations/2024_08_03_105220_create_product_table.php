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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('space_type', 255);
            $table->integer('price');
            $table->integer('kuota');
            $table->text('desc');
            $table->unsignedBigInteger('image_product_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
    
            $table->foreign('image_product_id')->references('id')->on('image_product')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
