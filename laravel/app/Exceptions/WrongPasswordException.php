<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class WrongPasswordException extends Exception
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'message' => 'Не верный пароль!',
        ], 422);
    }
}
