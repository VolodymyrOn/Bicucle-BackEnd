<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Velo; 
use App\Models\VeloCharacteristics; 
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
    
    public function create()
    {
        $columns['velos'] = Schema::getColumnListing('velos');
        $columns['velo_characteristics'] = Schema::getColumnListing('velo_characteristics');
    
        return view('admin.velo.create', ['columns' => $columns]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Валідація даних
        /*$request->validate([
            // Ваші правила валідації тут
        ]);*/

        $path = "no photo"; // Задайте значення за замовчуванням
        // Перевірте, чи була завантажена фотографія
        if ($request->hasFile('photo')) {
            // Якщо так, збережіть фотографію
            $path = $request->file('photo')->store('photos', 'public');
        }

        // Створення нового запису в базі даних для велосипеда
        $velo = Velo::create([
            'Marka' => $request->Marka,
            'Model' => $request->Model,
            'Color' => $request->Color,
            'Price' => $request->Price,
            'Count' => $request->Count,
            'Wheel_size' => $request->Wheel_size,
            'Rama_size' => $request->Rama_size,
            'Class' => $request->Class,
            'Type_of_brake' => $request->Type_of_brake,
            'Rama_material' => $request->Rama_material,
            'Count_of_speeds' => $request->Count_of_speeds,
            'Photo' => $path, // Зображення велосипеда
        ]);

        // Створення характеристик для цього велосипеда
        $characteristics = VeloCharacteristics::create([
            'Velo_id' => $velo->getKey(),
            'Opys' => $request->Opys,
            'Rama' => $request->Rama,
            'Caretka' => $request->Caretka,
            'Kermova_kolodka' => $request->Kermova_kolodka,
            'Dodatkovi_character' => $request->Dodatkovi_character,
            'Vylka' => $request->Vylka,
            'Zadniy_amort' => $request->Zadniy_amort,
            'Shatun_system' => $request->Shatun_system,
            'Peredniy_perem' => $request->Peredniy_perem,
            'Zadniy_perem' => $request->Zadniy_perem,
            'Ruchky_perem' => $request->Ruchky_perem,
            'Brake' => $request->Brake,
            'Oboda' => $request->Oboda,
            'Vtulky' => $request->Vtulky,
            'Kermo' => $request->Kermo,
            'Vynis_kerma' => $request->Vynis_kerma,
            'Pidsedelnyi_shtyr' => $request->Pidsedelnyi_shtyr,
            'Sidlo' => $request->Sidlo,
            'Pedali' => $request->Pedali,
            'Complectation' => $request->Complectation,
            'Year' => $request->Year,
            'vaga' => $request->vaga,
            'Country' => $request->Country,
            'Garanty' => $request->Garanty,
        ]);
        return request()->allFiles();
    }


    public function show(string $id)
    {
        //
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
