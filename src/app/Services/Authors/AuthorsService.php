<?php

namespace App\Services\Authors;

use App\Http\Filters\Authors\AuthorsFilter;
use App\Models\Author;
use Illuminate\Database\Eloquent\Builder;

class AuthorsService
{
    public function filter(array $filters): Builder
    {
        $filter = new AuthorsFilter($filters);
        $authors = Author::filter($filter)->latest("id");

        return $authors;
    }
}
