<?php

namespace App\Http\Controllers\Api;
use App\Models;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Velo; 
use App\Models\VeloCharacteristics; 


class VeloController extends Controller
{
    public function index(){
        $velos=Velo::all();
        $characteristics=VeloCharacteristics::all();
        $data= [
            'velos' => $velos,
            'characteristics' => $characteristics,
        ];
        $json = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $json;
    }
}
