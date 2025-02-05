<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    public $text;
    public $title;
    public $technologies;

    /**
     * Create a new component instance.
     */
    public function __construct($text, $title, array $technologies)
    {
        $this->text = $text;
        $this->title = $title;
        $this->technologies = $technologies;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project');
    }
}
