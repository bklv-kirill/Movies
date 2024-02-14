<?php

namespace App\Policies;

use App\Models\Author;
use App\Models\User;

class AuthorPolicy
{
    public function addAuthorToFavorite(User $user, Author $author): bool
    {
        return !$user->favoriteAuthors()->where("author_id", $author->id)->exists();
    }

    public function delete(User $user, Author $author): bool
    {
        return $user->is_admin;
    }

    public function update(User $user, Author $author): bool
    {
        return $user->is_admin;
    }
}
