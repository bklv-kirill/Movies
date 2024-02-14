<?php

namespace App\Services\Movies;

use App\Http\Filters\Movies\MoviesFilter;
use App\Models\Movie;
use App\Services\Traits\Updatable;
use Illuminate\Pagination\LengthAwarePaginator;

class MoviesService
{
    use Updatable;

    public function filter(array $filters): LengthAwarePaginator
    {
        $filter = new MoviesFilter($filters);
        $movies = Movie::filter($filter)->latest("id");


        return $movies->paginate(5);
    }
}
