<?php

namespace App\Http\Controllers\Cinemas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cinemas\IndexRequest;
use App\Services\Cinemas\CinemasService;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(IndexRequest $request, CinemasService $service): View
    {
        $filters = $request->validated();

        $cinemas = $service->filter($filters);

        return view("cinemas.index", compact(["cinemas", "filters"]));
    }
}
