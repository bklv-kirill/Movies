<?php

namespace App\Http\Controllers\Ganres;

use App\Http\Controllers\Controller;
use App\Models\Ganre;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Ganre $ganre): RedirectResponse
    {
        $ganre->delete();

        return back();
    }
}
