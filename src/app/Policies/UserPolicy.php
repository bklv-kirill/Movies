<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function delete(User $authUser, User $user): bool
    {
        return $authUser->is_admin;
    }
}
