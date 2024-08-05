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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->time('check_in');
            $table->time('check_out');
            $table->char('unique_code', 36); // Removed the default value
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('pop_img_id')->nullable();
            $table->timestamps();
    
            $table->foreign('payment_method_id')->references('id')->on('payment_method')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->foreign('pop_img_id')->references('id')->on('proof_of_payment_image')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
