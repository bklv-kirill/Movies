<?php

namespace App\Http\Controllers\Cinemas;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use Illuminate\View\View;

class AdminIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $cinemas = Cinema::query()->latest("id")->paginate(5);

        return view("cinemas.admin-index", compact(["cinemas"]));
    }
}
