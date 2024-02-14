<?php

namespace App\Http\Filters\Cinemas;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class CinemasFilter extends AbstractFilter
{
    public static function title(Builder $builder, string $title): void
    {
        $builder->where("title", "LIKE", "%{$title}%");
    }
}
