<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->time('check_in');
            $table->time('check_out');
            $table->char('unique_code', 36);
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('pop_img_id')->nullable();
            $table->decimal('total_cost', 8, 2); // Add this line
            $table->timestamps();

            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('pop_img_id')->references('id')->on('proof_of_payment_images')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
