<?php

namespace App\Services\Traits;

use Illuminate\Http\RedirectResponse;

trait Updatable
{
    public function updateValidation(string $model, int $id, string $column, string $value): RedirectResponse | null
    {
        $cinemaForValidate = $model::query()->where($column, $value)->first();
        return $cinemaForValidate && $cinemaForValidate->id !== $id ? back()->withInput()->withErrors([$column => "The {$column} has already been taken."]) : null;
    }
}
