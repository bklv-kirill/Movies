<?php

namespace App\Http\Controllers\FavoriteMovies;

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

        $favoriteMovies = $user->favoriteMovies()->oldest("id")->paginate(5);

        return view("favorite-movies.index", compact(["user", "favoriteMovies"]));
    }
}
