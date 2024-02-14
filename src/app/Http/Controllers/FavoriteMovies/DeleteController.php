<?php

namespace App\Http\Controllers\FavoriteMovies;

use App\Actions\FavoriteMovies\DeleteAction;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{

    public function __invoke(Movie $movie, DeleteAction $deleteAction): RedirectResponse
    {
        $deleteAction($movie->id);

        return str_contains(url()->previous(), "/movies/") ? back() : redirect()->route("user.favorite-movies.index");
    }
}
