<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class WrongDemandStatusException extends Exception
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'message' => 'Нельзя изменить статус заявки!',
        ], 422);
    }
}
