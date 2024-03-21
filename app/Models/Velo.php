<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Velo extends Model
{
    use HasFactory;

    protected $fillable = [
        'Marka', 
        'Model', 
        'Color', 
        'Price', 
        'Count', 
        'Wheel_size', 
        'Rama_size', 
        'Class', 
        'Type_of_brake', 
        'Rama_material', 
        'Count_of_speeds', 
        'Photo',
    ];
    
    protected $table = 'velos';

    public function characteristic()
    {
        return $this->hasOne(VeloCharacteristics::class, 'Velo_id');
    }
}
