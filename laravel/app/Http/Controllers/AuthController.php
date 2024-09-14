<?php

namespace App\Http\Controllers;

use App\Actions\RegistrationUserAction;
use App\Actions\LoginUserAction;
use App\Actions\LogoutUserAction;
use App\DataTransferObjects\LoginData;
use App\DataTransferObjects\RegistrationData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function registration(RegistrationData $data): JsonResponse
    {
        $response = RegistrationUserAction::execute($data);
        return response()->json($response, 201);
    }

    public function login(LoginData $data): JsonResponse
    {
        $response = LoginUserAction::execute($data);
        return response()->json($response, 200);
    }

    public function logout(Request $request): JsonResponse
    {
        LogoutUserAction::execute();
        return response()->json(null, 204);
    }
}
