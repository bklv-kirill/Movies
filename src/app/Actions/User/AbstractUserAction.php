<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

abstract class AbstractUserAction
{
    protected static function getUser(): User
    {
        return Auth::user();
    }
}
