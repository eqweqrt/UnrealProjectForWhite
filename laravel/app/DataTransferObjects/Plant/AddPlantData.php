<?php

namespace App\DataTransferObjects\Plant;

use Spatie\LaravelData\Attributes\Validation\Exists;
use Spatie\LaravelData\Attributes\Validation\IntegerType;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class AddPlantData extends Data
{
    public function __construct(
        #[Required, IntegerType, Min(1), Exists('types_of_plant', 'id')]
        public readonly int $type_of_plant_id,
        #[Required, IntegerType, Min(1)]
        public readonly int $amount,
    ) { }
}
