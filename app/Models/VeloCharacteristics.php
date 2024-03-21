<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VeloCharacteristics extends Model
{
    // Модель VeloCharacteristic

protected $fillable = [
    'Velo_id',
    'Opys',
    'Rama',
    'Caretka',
    'Kermova_kolodka',
    'Dodatkovi_character',
    'Vylka',
    'Zadniy_amort',
    'Shatun_system',
    'Peredniy_perem',
    'Zadniy_perem',
    'Ruchky_perem',
    'Brake',
    'Brake_ruchky',
    'Oboda',
    'Vtulky',
    'Kermo',
    'Vynis_kerma',
    'Pidsedelnyi_shtyr',
    'Sidlo',
    'Pedali',
    'Complectation',
    'Year',
    'vaga',
    'Country',
    'Garanty',
];

    protected $table = 'velo_characteristics';
    
}