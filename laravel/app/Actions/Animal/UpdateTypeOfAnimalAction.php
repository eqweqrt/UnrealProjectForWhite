<?php

namespace App\Actions\Animal;

use App\DataTransferObjects\Animal\UpdateTypeOfAnimalData;
use App\Models\TypeOfAnimal;

class UpdateTypeOfAnimalAction
{
    public static function execute(TypeOfAnimal $typeOfAnimal, UpdateTypeOfAnimalData $data): TypeOfAnimal
    {
        $typeOfAnimal->update([
            'description' => $data->description,
        ]);
        $typeOfAnimal->refresh();

        return $typeOfAnimal;
    }
}
