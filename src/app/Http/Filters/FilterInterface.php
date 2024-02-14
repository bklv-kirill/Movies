<?php

namespace App\Http\Filters;

interface FilterInterface
{
    public function getCallBacks(): array;
}
