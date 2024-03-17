<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VeloController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AdminController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/velo', [VeloController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);




Route::prefix('admin')->group(function () {
    Route::get('/velo/create', [AdminController::class, 'create'])->name('admin.velo.create');
    Route::post('/velo/store', [AdminController::class, 'store'])->name('admin.velo.store');
});

