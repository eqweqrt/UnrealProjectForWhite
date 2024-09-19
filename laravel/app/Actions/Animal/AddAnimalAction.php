<?php

namespace App\Actions\Animal;

use App\DataTransferObjects\Animal\AddAnimalData;
use App\Models\Animal;

class AddAnimalAction
{
    public static function execute(AddAnimalData $data): Animal
    {
        $animal = new Animal([
            'type_of_animal_id' => $data->type_of_animal_id,
            'birthday' => $data->birthday,
        ]);

        $animal->save();

        return $animal;
    }
}
