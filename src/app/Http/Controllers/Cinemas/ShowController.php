<?php

namespace App\Http\Controllers\Cinemas;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use Illuminate\View\View;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Cinema $cinema): View
    {
        return view("cinemas.show", compact(["cinema"]));
    }
}
