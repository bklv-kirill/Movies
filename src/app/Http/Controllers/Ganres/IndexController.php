<?php

namespace App\Http\Controllers\Ganres;

use App\Http\Controllers\Controller;
use App\Models\Ganre;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $ganres = Ganre::query()->latest("id")->get();

        return view("ganres.index", compact(["ganres"]));
    }
}
