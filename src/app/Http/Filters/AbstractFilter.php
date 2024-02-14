<?php

namespace App\Http\Filters;

use Illuminate\Support\Str;

abstract class AbstractFilter implements FilterInterface
{
    protected array $callBacks = [];

    public function __construct(array $filters)
    {
        foreach ($filters as $filter => $value) {
            if ($value) $this->callBacks[Str::remove("_id", $filter)] = $value;
        }
    }

    public function getCallBacks(): array
    {
        return $this->callBacks;
    }
}
