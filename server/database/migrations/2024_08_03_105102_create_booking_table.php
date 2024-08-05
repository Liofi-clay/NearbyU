<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('approval')->default(false);
            $table->unsignedBigInteger('order_detail_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_detail_id')->references('id')->on('order_detail');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
