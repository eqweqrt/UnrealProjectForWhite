<?php

namespace App\Actions\Demand;

use App\DataTransferObjects\Demand\CreateDemandData;
use App\Models\Demand;

class CreateDemandAction
{
    public static function execute(CreateDemandData $data): Demand
    {
        $demand = new Demand([
            'user_id' => auth()->id(),
            'role' => $data->role,
        ]);

        $demand->save();

        return $demand;
    }
}
