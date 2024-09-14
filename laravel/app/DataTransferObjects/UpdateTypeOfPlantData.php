<?php

namespace App\DataTransferObjects;

use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Data;

class UpdateTypeOfPlantData extends Data
{
    public function __construct(
        #[Nullable, Max(255)]
        public readonly null|string $description,
    ) {}
}
