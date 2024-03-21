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

        Schema::create('velos', function (Blueprint $table) {
            $table->id();
            $table->text('Marka');
            $table->text('Model');
            $table->text('Color');
            $table->float('Price');
            $table->integer('Count');
            $table->float('Wheel_size');
            $table->float('Rama_size');
            $table->text('Class');
            $table->text('Type_of_brake');
            $table->text('Rama_material');
            $table->integer('Count_of_speeds');
            $table->text('Photo');
            $table->timestamps();
        });

        Schema::create('velo_characteristics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Velo_id')->constrained();
            $table->text('Opys');
            $table->float('Rama');
            $table->text('Caretka');
            $table->text('Kermova_kolodka');
            $table->text('Dodatkovi_character');
            $table->text('Vylka');
            $table->text('Zadniy_amort');
            $table->text('Shatun_system');
            $table->text('Peredniy_perem');
            $table->text('Zadniy_perem');
            $table->text('Ruchky_perem');
            $table->text('Brake');
            $table->text('Brake_ruchky');
            $table->text('Oboda');
            $table->text('Vtulky');
            $table->text('Kermo');
            $table->text('Vynis_kerma');
            $table->text('Pidsedelnyi_shtyr');
            $table->text('Sidlo');
            $table->text('Pedali');
            $table->text('Complectation');
            $table->integer('Year');
            $table->float('vaga');
            $table->text('Country');
            $table->text('Garanty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('velos');
        Schema::dropIfExists('velo_characteristics');
    }
};
