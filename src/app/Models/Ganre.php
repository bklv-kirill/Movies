<?php

namespace App\Models;

use App\Casts\StringToNeedleCaseCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ganre extends Model
{
    use HasFactory;

    protected static string $self_table = "ganres";

    protected $fillable = [
        "title",
    ];

    protected $casts = [
        "title" => StringToNeedleCaseCast::class
    ];

    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class, "author_ganres");
    }
}
