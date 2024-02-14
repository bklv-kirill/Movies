<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */

    public $firstColumn;
    public $secondColumn;

    public function __construct($firstColumn, $secondColumn)
    {
        $this->firstColumn = $firstColumn;
        $this->secondColumn = $secondColumn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
