<?php

namespace App\Actions\FavoriteAuthors;

use App\Actions\User\AbstractUserAction;
use App\Models\AuthorUser;

class StoreAction extends AbstractUserAction
{
    public function __invoke(int $author_id): void
    {
        AuthorUser::query()->create(["author_id" => $author_id, "user_id" => self::getUser()->id]);
    }
}
