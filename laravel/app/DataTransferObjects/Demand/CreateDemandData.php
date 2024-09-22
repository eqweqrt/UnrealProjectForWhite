<?php

namespace App\DataTransferObjects\Demand;

use App\Enums\RoleEnum;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Data;

class CreateDemandData extends Data
{
    public function __construct(
        #[Enum(RoleEnum::class)]
        public string $role,
    ) { }
}
