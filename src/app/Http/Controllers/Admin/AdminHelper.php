<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use App\Models\Cinema;
use App\Models\Ganre;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminHelper
{
    public static function getUserName(): User
    {
        return Auth::user();
    }
    public static function getAdminData(): array
    {
        return [
            ["route_path" => "admin.user.", "title_info" => "Users registered", "count" => User::query()->get()->count()],
            ["route_path" => "admin.movies.", "title_info" => "Movies on site", "count" => Movie::query()->get()->count()],
            ["route_path" => "admin.cinemas.", "title_info" => "Cinemas on site", "count" => Cinema::query()->get()->count()],
            ["route_path" => "admin.authors.", "title_info" => "Authors on site", "count" => Author::query()->get()->count()],
            ["route_path" => "admin.ganres.", "title_info" => "Ganres on site", "count" => Ganre::query()->get()->count()],
        ];
    }
}
