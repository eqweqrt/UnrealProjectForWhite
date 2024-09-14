<?php

namespace App\Actions;

class LogoutUserAction
{
    public static function execute(): void
    {
        auth()->user()->tokens()->delete();
    }
}
