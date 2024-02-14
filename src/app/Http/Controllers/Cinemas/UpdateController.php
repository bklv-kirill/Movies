<?php

namespace App\Http\Controllers\Cinemas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cinemas\UpdateRequest;
use App\Models\Cinema;
use App\Services\Cinemas\CinemasService;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, CinemasService $service, Cinema $cinema)
    {
        $cinemaDate = $request->validated();

        if ($result = $service->updateValidation(Cinema::class, $cinema->id, "title", $cinemaDate["title"])
            ?? $service->updateValidation(Cinema::class, $cinema->id, "address", $cinemaDate["address"]))
            return $result;

        $cinema->update($cinemaDate);

        return redirect()->route("admin.cinemas.");
    }
}
