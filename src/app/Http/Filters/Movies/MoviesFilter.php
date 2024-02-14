<?php

namespace App\Http\Filters\Movies;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class MoviesFilter extends AbstractFilter
{
    public static function title(Builder $builder, string $title): void
    {
        $builder->where("title", "LIKE", "%{$title}%");
    }
    public static function ganre(Builder $builder, string $ganre_id): void
    {
        $builder->where("ganre_id", $ganre_id);
    }
    public static function author(Builder $builder, string $author_id): void
    {
        $builder->where("author_id", $author_id);
    }
}
