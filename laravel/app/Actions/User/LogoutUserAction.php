<?php

namespace App\Actions\User;

class LogoutUserAction
{
    public static function execute(): void
    {
        auth()->user()->tokens()->delete();
    }
}
