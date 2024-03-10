<?php

namespace App\Http\Controllers\Api;

use App\Models\users;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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


    /**
     * Реєстрація нового користувача
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'patronimic' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:site_users',
        'password' => 'required|string|min:8',
        'phone_number' => 'required|string|unique:users_profile',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }
    if(!isset($request->password)){
        $request->password="defaultt";
    }
    // Створення запису користувача
    $user = users::create([
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'type' => 1, // Припустимо, що тип користувача 1 - звичайний користувач
    ]);

    // Створення запису профілю користувача
    $profile = $user->profile()->create([
        'site_user_id' => $user->getKey(),
        'name' => $request->name,
        'surname' => $request->surname,
        'patronimic' => $request->patronimic,
        'phone_number' => $request->phone_number,
        'address_id' => 1, 
    ]);

    return response()->json(['user' => $user, 'profile' => $profile], 201);
}
    /**
     * Авторизація користувача
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Валідація введених даних
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Пошук користувача за email
        $user = users::where('email', $request->email)->first();

        // Перевірка чи користувач існує та чи вірний пароль
        if ($user && Hash::check($request->password, $user->password)) {
            // Авторизація пройшла успішно
            return response()->json(['message' => 'Login successful'], 200);
        } else {
            // Помилка авторизації
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
