<?php

namespace App\Http\Controllers;

use App\Actions\Plant\StoreTypeOfPlantAction;
use App\Actions\Plant\UpdateTypeOfPlantAction;
use App\DataTransferObjects\Plant\StoreTypeOfPlantData;
use App\DataTransferObjects\Plant\UpdateTypeOfPlantData;
use App\Models\TypeOfPlant;
use Illuminate\Http\JsonResponse;

class TypeOfPlantController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(TypeofPlant::all());
    }

    public function store(StoreTypeOfPlantData $data): JsonResponse
    {
        $typeOfPlant = StoreTypeOfPlantAction::execute($data);
        return response()->json($typeOfPlant, 201);
    }

    public function show(TypeOfPlant $typeOfPlant): JsonResponse
    {
        return response()->json($typeOfPlant);
    }

    public function update(TypeofPlant $typeOfPlant, UpdateTypeOfPlantData $data): JsonResponse
    {
        $typeOfPlant = UpdateTypeOfPlantAction::execute($typeOfPlant, $data);
        return response()->json($typeOfPlant, 200);
    }

    public function delete(TypeOfPlant $typeOfPlant): JsonResponse
    {
        $typeOfPlant->delete();
        return response()->json('Success delete!', 200);
    }
}
