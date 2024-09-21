<?php

namespace App\Http\Controllers;

use App\Actions\Demand\CreateDemandAction;
use App\DataTransferObjects\Demand\CreateDemandData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemandsController extends Controller
{
    public function index(Request $request)
    {
        return 'index';
    }

    public function create(CreateDemandData $data): JsonResponse
    {
//        $demand = CreateDemandAction::execute($data);
        $demand = 'asd';
        return response()->json($demand, 201);
    }

    public function approve(Request $request)
    {
        return 'approve';
    }

    public function decline(Request $request)
    {
        return 'decline';
    }
}
