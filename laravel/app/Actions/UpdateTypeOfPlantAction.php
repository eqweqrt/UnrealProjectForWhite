<?php

namespace App\Actions;

use App\DataTransferObjects\UpdateTypeOfPlantData;
use App\Models\TypeOfPlant;

class UpdateTypeOfPlantAction
{
    public static function execute(TypeOfPlant $typeOfPlant, UpdateTypeOfPlantData $data): TypeOfPlant
    {
        $typeOfPlant->update([
            'description' => $data->description,
        ]);
        $typeOfPlant->refresh();

        return $typeOfPlant;
    }
}
