<?php

namespace App\Http\Controllers\FavoriteAuthors;

use App\Actions\FavoriteAuthors\StoreAction;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{

    public function __invoke(Author $author, StoreAction $storeAction): RedirectResponse
    {
        $storeAction($author->id);

        return back();
    }
}
