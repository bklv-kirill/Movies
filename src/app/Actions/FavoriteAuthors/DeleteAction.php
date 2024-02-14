<?php

namespace App\Actions\FavoriteAuthors;

use App\Actions\User\AbstractUserAction;
use App\Models\AuthorUser;

class DeleteAction extends AbstractUserAction
{
    public function __invoke(int $author_id): void
    {
        AuthorUser::query()->where(["author_id" => $author_id, "user_id" => self::getUser()->id])->delete();
    }
}
