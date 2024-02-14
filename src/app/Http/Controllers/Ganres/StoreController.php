<?php

namespace App\Http\Controllers\Ganres;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ganres\StoreRequest;
use App\Models\Ganre;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $ganreData = $request->validated();

        $ganre = Ganre::query()->create($ganreData);

        return redirect()->route("admin.ganres.");
    }
}
