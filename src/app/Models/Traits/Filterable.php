<?php

namespace App\Models\Traits;

use App\Http\Filters\Authors\AuthorsFilter;
use App\Http\Filters\Cinemas\CinemasFilter;
use App\Http\Filters\Movies\MoviesFilter;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public static function filter(MoviesFilter | CinemasFilter | AuthorsFilter $filter): Builder
    {
        $builder = self::query();

        foreach ($filter->getCallBacks() as $callBack => $value) {
            call_user_func($filter::class."::{$callBack}", $builder, $value);
        }

        return $builder;
    }
}
