<?php

namespace App\Http\Controllers\Cinemas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cinemas\StoreRequest;
use App\Models\Cinema;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $cinemaData = $request->validated();

        $cinema = Cinema::query()->create($cinemaData);

        return redirect()->route("admin.cinemas.");
    }
}
