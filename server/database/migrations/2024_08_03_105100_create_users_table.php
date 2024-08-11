<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('username', 25);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('phone_number', 30);
            $table->unsignedBigInteger('image_profile_id')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->timestamps();

            $table->foreign('image_profile_id')->references('id')->on('image_profiles')->onDelete('set null');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
        Schema::enableForeignKeyConstraints();
    }
};