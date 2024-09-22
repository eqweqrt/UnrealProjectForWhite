<?php

namespace App\Policies;

use App\Enums\RoleEnum;
use App\Models\Demand;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class DemandPolicy
{
    use HandlesAuthorization;

    public function approve(User $user, Demand $demand): bool
    {
        return $user->role == RoleEnum::Admin->value;
    }

    public function decline(User $user, Demand $demand): bool
    {
        return $user->role == RoleEnum::Admin->value;
    }

    public function index(User $user): bool
    {
        return $user->role == RoleEnum::Admin->value;
    }
}
