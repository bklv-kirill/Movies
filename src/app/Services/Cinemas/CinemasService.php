<?php

namespace App\Services\Cinemas;

use App\Http\Filters\Cinemas\CinemasFilter;
use App\Models\Cinema;
use App\Services\Traits\Updatable;
use Illuminate\Pagination\LengthAwarePaginator;

class CinemasService
{
    use Updatable;

    public function filter(array $filters): LengthAwarePaginator
    {
        $filter = new CinemasFilter($filters);
        $cinemas = Cinema::filter($filter)->latest("id");

        return $cinemas->paginate(10);
    }
}
