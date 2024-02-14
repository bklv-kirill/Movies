<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Cinema;
use App\Models\Ganre;
use App\Models\Movie;
use Illuminate\View\View;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Movie $movie): View
    {
        $movieCinemas = $movie->cinemas->map(fn (Cinema $cinema) => $cinema->id)->toArray();
        $cinemas = Cinema::query()->latest("id")->get();
        $authors = Author::query()->latest("id")->get();
        $ganres = Ganre::query()->latest("id")->get();

        return view("movies.edit", compact(["movie", "movieCinemas", "cinemas", "authors", "ganres"]));
    }
}
