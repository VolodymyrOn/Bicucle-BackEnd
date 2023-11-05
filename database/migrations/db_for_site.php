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
        Schema::create('Bicucles', function (Blueprint $table) {
            $table->id();
            $table->text('Marka');
            $table->text('Model');
            $table->text('Color');
            $table->text('Type');
            $table->text('Tires');
            $table->text('Size');
            $table->text('Type_of_rear_bushing');
            $table->float('Price');
            $table->timestamps();
        });

        Schema::create('Characteristics', function (Blueprint $table) {
            $table->id();
            $table->text('Velo_id');
            $table->text('Wheel diameter');
            $table->text('Cassette');
            $table->text('Shifters');
            $table->text('Rim');
            $table->text('Pedals');
            $table->text('Front brakes');
            $table->text('Front derailleur');
            $table->text('Tires');
            $table->text('Frame');
            $table->text('Steering column');
            $table->text('Brake levers');
            $table->text('Handlebar');
            $table->text('Saddle');
            $table->text('Seatpost');
            $table->text('Cranks');
            $table->text('Fork');
            $table->text('Bushes');
            $table->text('Bearing');
            $table->text('Rear brakes');
            $table->text('Rear derailleur');
            $table->timestamps();



            Schema::create('Orders', function (Blueprint $table) {
                $table->id();
                $table->text('Velo_id');
                $table->text('surname');
                $table->text('name');
                $table->text('patronymic');
                $table->text('phone_number');
                $table->text('city');
                $table->text('street');
                $table->text('house_number');
                $table->text('payment');
                $table->float('Total_price');
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Characteristics','Bicucles', 'Orders');
    }
};
