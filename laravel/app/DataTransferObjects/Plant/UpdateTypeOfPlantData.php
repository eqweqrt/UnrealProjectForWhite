<?php

namespace App\DataTransferObjects\Plant;

use App\DataTransferObjects\Max;
use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Data;

class UpdateTypeOfPlantData extends Data
{
    public function __construct(
        #[Nullable, Max(255)]
        public readonly null|string $description,
    ) {}
}
