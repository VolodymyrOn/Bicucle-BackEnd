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
            $table->string('Marka');
            $table->string('Model');
            $table->string('Color');
            $table->string('Type');
            $table->string('Tires');
            $table->string('Size');
            $table->string('Type_of_rear_bushing');
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
            $table->text('Handlebar');
            $table->text('Saddle');
            $table->text('Cranks');
            $table->text('Fork');
            $table->text('Bushes');
            $table->text('Bearing');
            $table->text('Rear brakes');
            $table->text('Rear derailleur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens','Characteristics','Bicucles');
    }
};
