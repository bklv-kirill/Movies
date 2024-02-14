<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view("authors.create", compact([]));
    }
}
