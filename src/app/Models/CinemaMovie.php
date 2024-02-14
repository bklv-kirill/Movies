<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaMovie extends Model
{
    use HasFactory;

    protected $fillable = [
        "movie_id",
        "cinema_id",
    ];
}
