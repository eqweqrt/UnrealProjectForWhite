<?php

namespace App\DataTransferObjects\Animal;

use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\Unique;
use Spatie\LaravelData\Data;

class StoreTypeOfAnimalData extends Data
{
    public function __construct(
        #[Required, Unique('types_of_animal', 'name'), Max(255)]
        public readonly string $name,
        #[Nullable, Max(255)]
        public readonly string $description,
    ) {}
}
