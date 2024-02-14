<?php

namespace App\Http\Controllers\Ganres;

use App\Http\Controllers\Controller;
use App\Models\Ganre;
use Illuminate\View\View;

class AdminIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $ganres = Ganre::query()->latest("id")->paginate(5);

        return view("ganres.admin-index", compact(["ganres"]));
    }
}
