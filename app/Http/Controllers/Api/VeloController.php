<?php

namespace App\Http\Controllers\Api;
use App\Models;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Velo; 
use App\Models\VeloCharacteristics; 


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
            'velos' => $velos
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
        return Velo::find($id);
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
