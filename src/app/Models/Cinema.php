<?php

namespace App\Models;

use App\Casts\StringToNeedleCaseCast;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cinema extends Model
{
    use HasFactory;
    use Filterable;

    protected static string $self_table = "cinemas";
    protected $fillable = [
        "title",
        "address",
    ];

    protected $casts = [
        "title" => StringToNeedleCaseCast::class,
        "address" => StringToNeedleCaseCast::class,
    ];

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, "cinema_movies");
    }
}
