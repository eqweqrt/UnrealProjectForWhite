<?php

namespace App\DataTransferObjects\Animal;

use Spatie\LaravelData\Attributes\Validation\Date;
use Spatie\LaravelData\Attributes\Validation\Exists;
use Spatie\LaravelData\Attributes\Validation\IntegerType;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class AddAnimalData extends Data
{
    public function __construct(
        #[Required, IntegerType, Min(1), Exists('types_of_animal', 'id')]
        public readonly int $type_of_animal_id,
        #[Required, Date]
        public readonly string $birthday,
    ) { }
}
