<?php

namespace App\Http\Controllers;

use App\Actions\StoreTypeOfPlantAction;
use App\Actions\UpdateTypeOfPlantAction;
use App\DataTransferObjects\StoreTypeOfPlantData;
use App\DataTransferObjects\UpdateTypeOfPlantData;
use App\Models\TypeOfPlant;
use Illuminate\Http\JsonResponse;

class TypeOfPlantController extends Controller
{
    public function index()
    {
        return TypeofPlant::all();
    }

    public function store(StoreTypeOfPlantData $data)
    {
        $typeOfPlant = StoreTypeOfPlantAction::execute($data);
        return $typeOfPlant;
    }

    public function show(TypeOfPlant $typeOfPlant)
    {
        return $typeOfPlant;
    }

    public function update(TypeofPlant $typeOfPlant, UpdateTypeOfPlantData $data)
    {
        $typeOfPlant = UpdateTypeOfPlantAction::execute($typeOfPlant);
        return $typeOfPlant;
    }

    public function delete(TypeOfPlant $typeOfPlant)
    {
        $typeOfPlant->delete();
        return 'Pu PU pU';
    }
}
