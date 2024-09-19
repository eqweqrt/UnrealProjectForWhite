<?php

namespace App\Actions\Plant;

use App\DataTransferObjects\Plant\AddPlantData;
use App\Models\Plant;

class AddPlantAction
{
    public static function execute(AddPlantData $data): Plant
    {
        if($plant = Plant::query()->where('type_of_plant_id', '=', $data->type_of_plant_id)->firstOrFail()) {
            $plant->increment('amount', $data->amount);
            return $plant;
        }

        $plant = new Plant([
            'type_of_plant_id' => $data->type_of_plant_id,
            'amount' => $data->amount,
        ]);

        $plant->save();

        return $plant;
    }
}
