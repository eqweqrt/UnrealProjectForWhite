<?php

namespace App\DataTransferObjects\Demand;

use App\Enums\RoleEnum;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;

class CreateDemandData
{
    public function __construct(
        #[Enum(RoleEnum::class)]
        public string $role,
    ) { }
}
