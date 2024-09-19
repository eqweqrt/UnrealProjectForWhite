<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class InvalidRemoveException extends Exception
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'message' => 'Вы пытаетесь удалить большее количество растений, чем их есть на складе!',
        ], 422);
    }
}
