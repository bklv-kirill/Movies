<?php

namespace App\Http\Controllers\FavoriteMovies;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\View\View;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Movie $movie): View
    {
        return view("movies.show", compact(["movie"]));
    }
}
