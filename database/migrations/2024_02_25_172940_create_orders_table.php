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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')->constrained();
            $table->foreignId('Address_id')->constrained();
            $table->string('name');            
            $table->string('surname');
            $table->string('patronimic');
            $table->string('phone_number')->unique();
            $table->float('Total_price');
            $table->text('Status');
            $table->timestamps();
        });       
        
        Schema::create('ordered_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Velo_id')->constrained();
            $table->integer('Count');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
