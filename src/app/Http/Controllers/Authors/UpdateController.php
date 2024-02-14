<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authors\StoreRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request, Author $author): RedirectResponse
    {
        $authorData = $request->validated();

        $author->update($authorData);

        return redirect()->route("admin.authors.");
    }
}
