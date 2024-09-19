<?php

namespace App\Http\Controllers;

use App\Actions\Animal\AddAnimalAction;
use App\DataTransferObjects\Animal\AddAnimalData;
use App\Models\Animal;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Animal::all());
    }

    public function show(Animal $animal): JsonResponse
    {
        return response()->json($animal);
    }

    public function add(AddAnimalData $data): JsonResponse
    {
        $animal = AddAnimalAction::execute($data);
        return response()->json($animal);
    }

    public function remove(Animal $animal): JsonResponse
    {
        $animal->delete();
        return response()->json("Animal removed successfully", 200);
    }
}
