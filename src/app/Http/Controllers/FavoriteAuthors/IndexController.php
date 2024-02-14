<?php

namespace App\Http\Controllers\FavoriteAuthors;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $user = auth()->user();

        $authors = $user->favoriteAuthors()->oldest("id")->paginate(5);

        return view("favorite-authors.index", compact(["user", "authors"]));
    }
}
