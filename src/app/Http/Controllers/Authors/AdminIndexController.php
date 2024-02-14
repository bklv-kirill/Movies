<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\View\View;

class AdminIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $authors = Author::query()->latest("id")->paginate(5);

        return view("authors.admin-index", compact(["authors"]));
    }
}
