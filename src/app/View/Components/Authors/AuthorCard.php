<?php

namespace App\View\Components\Authors;

use App\Models\Author;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthorCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $author;

    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.authors.author-card');
    }
}
