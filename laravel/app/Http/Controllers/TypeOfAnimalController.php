<?php

namespace App\Http\Controllers;

use App\Actions\Animal\StoreTypeOfAnimalAction;
use App\Actions\Animal\UpdateTypeOfAnimalAction;
use App\DataTransferObjects\Animal\StoreTypeOfAnimalData;
use App\DataTransferObjects\Animal\UpdateTypeOfAnimalData;
use App\Models\TypeOfAnimal;
use Illuminate\Http\JsonResponse;

class TypeOfAnimalController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(TypeOfAnimal::all());
    }

   public function store(StoreTypeOfAnimalData $data): JsonResponse
   {
       $typeOfAnimal = StoreTypeOfAnimalAction::execute($data);
       return response()->json($typeOfAnimal, 201);
   }

   public function show(TypeOfAnimal $typeOfAnimal): JsonResponse
   {
       return response()->json($typeOfAnimal);
   }

   public function update(TypeOfAnimal $typeOfAnimal, UpdateTypeOfAnimalData $data): JsonResponse
   {
       $typeOfAnimal = UpdateTypeOfAnimalAction::execute($typeOfAnimal, $data);
       return response()->json($typeOfAnimal, 200);
   }

   public function delete(TypeOfAnimal $typeOfAnimal): JsonResponse
   {
       $typeOfAnimal->delete();
       return response()->json('Success deleted!');
   }
}
