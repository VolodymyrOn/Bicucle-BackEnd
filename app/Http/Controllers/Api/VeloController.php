<?php

namespace App\Http\Controllers\Api;
use App\Models;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Velo; 
use App\Models\VeloCharacteristics; 
use Illuminate\Support\Facades\Storage;

class VeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $velos=Velo::all();
        $characteristics=VeloCharacteristics::all();
        $data= [
            'velos' => $velos,
            'characteristics' => $characteristics
        ];
        $json = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $json;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $velos = Velo::findOrFail($id);
        $characteristics = $velos->characteristic();

        $photoUrl = null;
        if (!empty($velos->Photo)) {
            $photoPath = Storage::url($velos->Photo); 
            $photoUrl = asset($photoPath);
        }
 
        $data = [
            'velos' => $velos,
            'characteristics' => $characteristics,
            'photo_url' => $photoUrl,
        ];

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
