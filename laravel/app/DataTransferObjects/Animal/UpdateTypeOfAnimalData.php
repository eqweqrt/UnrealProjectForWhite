<?php

namespace App\DataTransferObjects\Animal;

use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Data;

class UpdateTypeOfAnimalData extends Data
{
    public function __construct(
        #[Nullable, Max(255)]
        public readonly null|string $description,
    ) {}
}
