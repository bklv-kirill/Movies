<?php

namespace App\Models;

use App\Casts\StringToNeedleCaseCast;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Author extends Model
{
    use HasFactory;
    use Filterable;

    protected static string $self_table = "authors";

    protected $fillable = [
        "first_name",
        "last_name",
        "birthday",
        "gender",
        "avatar",
    ];

    protected $casts = [
        "first_name" => StringToNeedleCaseCast::class,
        "last_name" => StringToNeedleCaseCast::class,
        "gender" => StringToNeedleCaseCast::class,
        "birthday" => "date",
    ];


    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class)->latest("id");
    }

    public function ganres(): BelongsToMany
    {
        return $this->belongsToMany(Ganre::class, "author_ganres");
    }

    public function fullName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getAge(): string
    {
        return Carbon::parse($this->birthday)->diff()->y;
    }
}
