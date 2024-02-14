<?php

namespace App\Actions\FavoriteMovies;

use App\Actions\User\AbstractUserAction;
use App\Models\MovieUser;

class DeleteAction extends AbstractUserAction
{
    public function __invoke(int $movie_id): void
    {
        MovieUser::query()->where(["movie_id" => $movie_id, "user_id" => self::getUser()->id])->delete();
    }
}
