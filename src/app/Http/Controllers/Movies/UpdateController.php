<?php

namespace App\Http\Controllers\Movies;

use App\Events\MovieCreatedOrUpdatedEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Movies\UpdateRequest;
use App\Models\Movie;
use App\Services\Movies\MoviesService;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, MoviesService $service, Movie $movie): RedirectResponse
    {
        $movieData = $request->validated();

        if ($result = $service->updateValidation(Movie::class, $movie->id, "title", $movieData["title"]))
            return $result;

        $movie->update($movieData);
        event(new MovieCreatedOrUpdatedEvent($movie->id, $movieData["cinemas"]));

        return redirect()->route("admin.movies.");
    }
}
