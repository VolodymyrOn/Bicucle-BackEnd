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
        Schema::create('site_users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('type');
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('city')->unique();
            $table->string('street');
            $table->integer('house_number');
            $table->timestamps();
        });

        Schema::create('users_profile', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_user_id')->constrained();
            $table->string('name');            
            $table->string('surname');
            $table->string('patronimic');
            $table->string('phone_number')->unique();
            $table->foreignId('address_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_users');
        Schema::dropIfExists('users_profile');
        Schema::dropIfExists('address');
    }
};
