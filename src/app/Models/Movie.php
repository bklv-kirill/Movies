<?php

namespace App\Models;

use App\Casts\StringToNeedleCaseCast;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;
    use Filterable;

    protected static string $self_table = "movies";
    protected $fillable = [
        "title",
        "description",
        "image",
        "release_date",
        "ganre_id",
        "author_id",
    ];

    protected $casts = [
        "title" => StringToNeedleCaseCast::class,
        "description" => StringToNeedleCaseCast::class,
        "release_date" => "date"
    ];


    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function ganre(): BelongsTo
    {
        return $this->belongsTo(Ganre::class);
    }

    public function cinemas(): BelongsToMany
    {
        return $this->belongsToMany(Cinema::class, "cinema_movies");
    }
}
