<?php

namespace App\DataTransferObjects\Plant;

use Spatie\LaravelData\Attributes\Validation\IntegerType;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class RemovePlantData extends Data
{
    public function __construct(
        #[Required, IntegerType, Min(1)]
        public readonly int $type_of_plant_id,
        #[Required, IntegerType, Min(1)]
        public readonly int $amount,
    ) { }
}
