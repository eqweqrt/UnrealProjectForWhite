<?php

namespace App\Actions\User;
use App\DataTransferObjects\User\LoginData;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;

class LoginUserAction
{
    public static function execute(LoginData $data): array
    {
        $user = User::query()->where('email', '=', $data->email)->firstOrFail();

        throw_unless(Hash::check($data->password, $user->password), new HttpResponseException(response()->json(['Message' => 'Wrong password'], 422)));

        $token = $user->createToken('my-app-token')->plainTextToken;

        return ['user' => $user, 'token' => $token];
    }
}
