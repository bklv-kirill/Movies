<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authors\StoreRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $authorData = $request->validated();

        $author = Author::query()->create(array_merge($authorData, [
            "avatar" => fake()->imageUrl("400", "400", "avatar"),
        ]));

        return redirect()->route("admin.authors.");
    }
}
