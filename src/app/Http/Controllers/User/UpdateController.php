<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Services\User\UserService;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, UserService $service): RedirectResponse
    {
        $userData = $request->validated();
        $user = auth()->user();

        if (!$service->passwordHashCheck($userData["password"]))
            return back()->withInput()->withErrors(["password" => "Invalid password"]);

        $user->update($userData);

        return back();
    }
}
