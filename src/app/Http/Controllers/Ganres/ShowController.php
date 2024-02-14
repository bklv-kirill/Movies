<?php

namespace App\Http\Controllers\Ganres;

use App\Http\Controllers\Controller;
use App\Models\Ganre;
use Illuminate\View\View;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Ganre $ganre): View
    {
        return view("ganres.show", compact(["ganre"]));
    }
}
