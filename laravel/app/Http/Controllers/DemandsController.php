<?php

namespace App\Http\Controllers;

use App\Actions\Demand\CreateDemandAction;
use App\DataTransferObjects\Demand\CreateDemandData;
use App\Enums\DemandStatusEnum;
use App\Exceptions\WrongDemandStatusException;
use App\Models\Demand;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DemandsController extends Controller
{
    public function index(): JsonResponse
    {
        $this->authorize('index', Demand::class);
        return response()->json(Demand::all());
    }

    public function create(CreateDemandData $data): JsonResponse
    {
        $demand = CreateDemandAction::execute($data);
        return Response::json($demand, 201);
    }

    public function approve(Demand $demand): JsonResponse
    {
        $this->authorize('approve', [$demand]);

        throw_if($demand->status != DemandStatusEnum::Pending->value, new WrongDemandStatusException());

        $requestingUser = User::query()->find($demand->user_id);
        $requestingUser->syncRoles([$demand->role]);

        $demand->status = DemandStatusEnum::Approved;

        $demand->save();

        return response()->json($demand, 200);
    }

    public function decline(Demand $demand): JsonResponse
    {
        $this->authorize('decline', [$demand]);

        throw_if($demand->status != DemandStatusEnum::Pending->value, new WrongDemandStatusException());

        $demand->status = DemandStatusEnum::Declined;

        $demand->save();

        return response()->json($demand, 200);
    }
}
