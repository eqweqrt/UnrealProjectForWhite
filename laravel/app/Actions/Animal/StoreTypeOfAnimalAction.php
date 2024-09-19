<?php

namespace App\Actions\Animal;

use App\DataTransferObjects\Animal\StoreTypeOfAnimalData;
use App\Models\TypeOfAnimal;

class StoreTypeOfAnimalAction
{
    public static function execute(StoreTypeOfAnimalData $data): TypeOfAnimal
    {
        $typeOfAnimal = new TypeOfAnimal([
            'name' => $data->name,
            'description' => $data->description,
        ]);
        $typeOfAnimal->save();

        return $typeOfAnimal;
    }
}
