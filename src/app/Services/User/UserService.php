<?php

namespace App\Services\User;

use App\Actions\User\AbstractUserAction;
use Illuminate\Support\Facades\Hash;

class UserService extends AbstractUserAction
{
    public function passwordHashCheck(string $passwordHash): bool
    {
        return Hash::check($passwordHash, self::getUser()->getAuthPassword());
    }
}
