<?php

namespace App\DataTransferObjects;

use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Password;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class LoginData extends Data
{
    public function __construct(
        #[Required, Email]
        public string       $email,
        #[Required, Password(min:6)]
        public string       $password,
    ){}
}
