<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AuthRequest $request): RedirectResponse
    {
        $userData = $request->validated();

        return Auth::attempt($userData) ? redirect("/") : redirect()->route("user.login")->withInput()->withErrors(["password" => "Incorrect password"]);
    }
}
