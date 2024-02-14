<?php

namespace App\Policies;

use App\Models\Ganre;
use App\Models\User;

class GanrePolicy
{

    public function delete(User $user, Ganre $ganre): bool
    {
        return $user->is_admin;
    }

    public function update(User $user, Ganre $ganre): bool
    {
        return $user->is_admin;
    }

}
