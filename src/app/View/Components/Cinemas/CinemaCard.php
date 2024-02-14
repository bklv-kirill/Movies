<?php

namespace App\View\Components\Cinemas;

use App\Models\Cinema;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CinemaCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $cinema;
    public function __construct(Cinema $cinema)
    {
        $this->cinema = $cinema;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cinemas.cinema-card');
    }
}
