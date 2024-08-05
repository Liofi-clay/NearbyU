<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('space_type', 255);
            $table->integer('price');
            $table->integer('kuota');
            $table->text('desc');
            $table->unsignedBigInteger('image_product_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('image_product_id')->references('id')->on('image_products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
