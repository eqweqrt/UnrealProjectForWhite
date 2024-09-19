<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\TypeOfAnimalController;
use App\Http\Controllers\TypeOfPlantController;
use Illuminate\Support\Facades\Route;

Route::post('registration', [AuthController::class, 'registration']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('types-of-plants', [TypeOfPlantController::class, 'index']);
    Route::post('types-of-plants', [TypeOfPlantController::class, 'store']);
    Route::get('types-of-plants/{typeOfPlant}', [TypeOfPlantController::class, 'show']);
    Route::patch('types-of-plants/{typeOfPlant}', [TypeOfPlantController::class, 'update']);
    Route::delete('types-of-plants/{typeOfPlant}', [TypeOfPlantController::class, 'delete']);

    Route::get('plants', [PlantController::class, 'index']);
    Route::get('plants/{plant}', [PlantController::class, 'show']);
    Route::post('plants/add', [PlantController::class, 'add']);
    Route::post('plants/remove', [PlantController::class, 'remove']);

    Route::get('type-of-animals', [TypeOfAnimalController::class, 'index']);
    Route::post('type-of-animals', [TypeOfAnimalController::class, 'store']);
    Route::get('type-of-animals/{typeOfAnimal}', [TypeOfAnimalController::class, 'show']);
    Route::patch('type-of-animals/{typeOfAnimal}', [TypeOfAnimalController::class, 'update']);
    Route::delete('type-of-animals/{typeOfAnimal}', [TypeOfAnimalController::class, 'delete']);

    Route::get('animals', [AnimalController::class, 'index']);
    Route::get('animals/{animals}', [AnimalController::class, 'show']);
    Route::post('animals/add', [AnimalController::class, 'add']);
    Route::post('animals/remove', [AnimalController::class, 'remove']);


    Route::post('/logout', [AuthController::class, 'logout']);
});
