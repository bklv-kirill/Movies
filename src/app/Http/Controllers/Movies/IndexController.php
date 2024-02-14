<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movies\IndexRequest;
use App\Models\Author;
use App\Models\Ganre;
use App\Services\Movies\MoviesService;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(IndexRequest $request, MoviesService $service): View
    {
        $filters = $request->validated();
        if (!isset($filters["ganre_id"])) $filters["ganre_id"] = null;
        if (!isset($filters["author_id"])) $filters["author_id"] = null;

        $movies = $service->filter($filters);

        $ganres = Ganre::query()->latest("id")->get();
        $authors = Author::query()->latest("id")->get();

        return view("movies.index", compact(["movies", "filters", "ganres", "authors"]));
    }
}
