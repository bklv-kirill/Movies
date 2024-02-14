<?php

namespace App\Policies;

use App\Models\Cinema;
use App\Models\User;

class CinemaPolicy
{

    public function delete(User $user, Cinema $cinema): bool
    {
        return $user->is_admin;
    }

    public function update(User $user, Cinema $cinema): bool
    {
        return $user->is_admin;
    }
}
