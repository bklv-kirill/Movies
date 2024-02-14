<?php

namespace App\Http\Controllers\Ganres;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ganre\UpdateRequest;
use App\Models\Ganre;
use App\Services\Ganres\GanreService;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, GanreService $service, Ganre $ganre): RedirectResponse
    {
        $ganreDate = $request->validated();

        if ($result = $service->updateValidation(Ganre::class, $ganre->id, "title", $ganreDate["title"]))
            return $result;

        $ganre->update($ganreDate);

        return redirect()->route("admin.ganres.");
    }
}
