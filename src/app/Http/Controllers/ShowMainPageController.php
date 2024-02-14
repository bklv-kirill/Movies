<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ShowMainPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view("main");
    }
}
