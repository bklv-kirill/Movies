<?php

namespace App\Http\Controllers\FavoriteMovies;

use App\Actions\FavoriteMovies\StoreAction;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(Movie $movie, StoreAction $storeAction): RedirectResponse
    {
        $storeAction($movie->id);

        return back();
    }
}
