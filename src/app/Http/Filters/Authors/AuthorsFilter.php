<?php

namespace App\Http\Filters\Authors;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class AuthorsFilter extends AbstractFilter
{
    public static function name(Builder $builder, string $name): void
    {
        $builder->where("first_name", "LIKE", "%{$name}%");
    }

    public static function order(Builder $builder, string $order): void
    {
        if ($order === "ageup") $builder->latest("birthday");
        else if ($order === "agedown") $builder->oldest("birthday");
        else if ($order === "moviesup") $builder->whereHas("movies")->withCount("movies")->oldest("movies_count");
        else if ($order === "moviesdown") $builder->whereHas("movies")->withCount("movies")->latest("movies_count");

    }
}
