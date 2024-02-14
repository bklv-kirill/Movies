<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movies\StoreRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $movieData = $request->validated();

        $movie = Movie::query()->create(array_merge($movieData, ["image" => "https://via.placeholder.com/780x180.png/00eebb?text=movies"]));

        return redirect()->route("admin.movies.");
    }
}
