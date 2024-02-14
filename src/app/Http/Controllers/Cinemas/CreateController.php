<?php

namespace App\Http\Controllers\Cinemas;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view("cinemas.create", compact([]));
    }
}
