<?php

namespace App\Policies;

use App\Models\Movie;
use App\Models\User;

class MoviePolicy
{
    /**
     * Determine whether the user can view any models.
     */

    public function addMovieToFavorite(User $user, Movie $movie): bool
    {
        return !$user->favoriteMovies()->where("movie_id", $movie->id)->exists();
    }

    public function delete(User $user, Movie $movie): bool
    {
        return $user->is_admin;
    }

    public function update(User $user, Movie $movie): bool
    {
        return $user->is_admin;
    }
}
