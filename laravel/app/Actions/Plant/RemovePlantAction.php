<?php

namespace App\Actions\Plant;

use App\DataTransferObjects\Plant\RemovePlantData;
use App\Exceptions\InvalidRemoveException;
use App\Models\Plant;

class RemovePlantAction
{
    public static function execute(RemovePlantData $data)
    {
        $plant = Plant::query()->where('type_of_plant_id', '=', $data->type_of_plant_id)->firstOrFail();

        if ($plant->amount < $data->amount) {
            throw new InvalidRemoveException();
        }

        $plant->decrement('amount', $data->amount);

        return $plant;
    }
}
