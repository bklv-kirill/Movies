<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Cinema;
use App\Models\Ganre;
use Illuminate\View\View;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $ganres = Ganre::query()->latest("id")->get();
        $authors = Author::query()->latest("id")->get();
        $cinemas = Cinema::query()->latest("id")->get();

        return view("movies.create", compact(["authors", "ganres", "cinemas"]));
    }
}
