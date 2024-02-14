<?php

namespace App\Http\Controllers\Cinemas;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use Illuminate\Http\RedirectResponse;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Cinema $cinema): RedirectResponse
    {
        $cinema->delete();

        return back();
    }
}
