<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Movie $movie): RedirectResponse
    {
        $movie->delete();

        return back();
    }
}
