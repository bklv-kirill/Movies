<?php

namespace App\Http\Controllers\FavoriteAuthors;

use App\Actions\FavoriteAuthors\DeleteAction;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{

    public function __invoke(Author $author, DeleteAction $deleteAction): RedirectResponse
    {
        $deleteAction($author->id);

        return str_contains(url()->previous(), "/authors/") ? back() : redirect()->route("user.favorite-authors.index");
    }
}
