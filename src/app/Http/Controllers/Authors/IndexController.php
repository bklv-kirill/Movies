<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authors\IndexRequest;
use App\Services\Authors\AuthorsService;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(IndexRequest $request, AuthorsService $service): View
    {
        $filters = $request->validated();
        if (!isset($filters["order"])) $filters["order"] = null;

        $authors = $service->filter($filters)->with("movies")->paginate(5);

        return view("authors.index", compact(["authors", "filters"]));
    }
}
