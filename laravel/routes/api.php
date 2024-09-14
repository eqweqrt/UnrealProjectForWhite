<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TriController;
use App\Http\Controllers\TypeOfPlantController;
use Illuminate\Support\Facades\Route;

Route::post('registration', [AuthController::class, 'registration']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/test', [TriController::class, 'test']);

    Route::get('types-of-plants', [TypeOfPlantController::class, 'index']);
    Route::post('types-of-plants', [TypeOfPlantController::class, 'store']);
    Route::get('types-of-plants/{typeOfPlant}', [TypeOfPlantController::class, 'show']);
    Route::patch('types-of-plants/{typeOfPlant}', [TypeOfPlantController::class, 'update']);
    Route::delete('types-of-plants/{typeOfPlant}', [TypeOfPlantController::class, 'delete']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
