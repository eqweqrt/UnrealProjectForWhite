<?php

namespace App\Http\Controllers;

use App\Actions\Plant\AddPlantAction;
use App\Actions\Plant\RemovePlantAction;
use App\DataTransferObjects\Plant\AddPlantData;
use App\DataTransferObjects\Plant\RemovePlantData;
use App\Models\Plant;
use Illuminate\Http\JsonResponse;

class PlantController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Plant::all());
    }

    public function show(Plant $plant): JsonResponse
    {
        return response()->json($plant);
    }

    public function add(AddPlantData $data): JsonResponse
    {
        $plant = AddPlantAction::execute($data);
        return response()->json($plant, 201);
    }

    public function remove(RemovePlantData $data): JsonResponse
    {
        $plant = RemovePlantAction::execute($data);
        return response()->json($plant, 201);
    }
}
