<?php

namespace App\Http\Controllers\FavoriteAuthors;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\View\View;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Author $author): View
    {
        $author = Author::query()->where("id", $author->id)->first();

        return view("authors.show", compact(["author"]));
    }
}
