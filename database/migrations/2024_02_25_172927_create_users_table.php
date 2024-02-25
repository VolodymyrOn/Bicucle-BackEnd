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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('type');
            $table->timestamps();
        });

        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('city')->unique();
            $table->string('street');
            $table->integer('house_number');
            $table->timestamps();
        });

        Schema::create('users_profile', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->string('name');            
            $table->string('surname');
            $table->string('patronimic');
            $table->string('phone_number')->unique();
            $table->foreign_id('address_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
