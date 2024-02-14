<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $user = auth()->user();

        return view("user.profile", compact(["user"]));
    }
}
