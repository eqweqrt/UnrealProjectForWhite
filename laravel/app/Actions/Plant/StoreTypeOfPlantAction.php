<?php

namespace App\Actions\Plant;

use App\DataTransferObjects\Plant\StoreTypeOfPlantData;
use App\Models\TypeOfPlant;

class StoreTypeOfPlantAction
{
    public static function execute(StoreTypeOfPlantData $data): TypeOfPlant
    {
        $typeOfPlant = new TypeOfPlant([
            'name' => $data->name,
            'description' => $data->description
        ]);
        $typeOfPlant->save();

        return $typeOfPlant;
    }
}
