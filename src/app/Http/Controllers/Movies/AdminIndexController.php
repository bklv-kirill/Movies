<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\View\View;

class AdminIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $movies = Movie::query()->latest("id")->paginate(5);

        return view("movies.admin-index", compact(["movies"]));
    }
}
