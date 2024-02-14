<?php

namespace App\View\Components\Movies;

use App\Models\Movie;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $movie;
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movies.movie-card');
    }
}
