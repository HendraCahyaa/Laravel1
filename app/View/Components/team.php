<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class team extends Component
{
    public $name;
    public $delay;
    public $img;
    public $span;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $delay, $img, $span)
    {
        $this->name = $name;
        $this->delay = $delay;
        $this->img = $img;
        $this->span = $span;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team');
    }
}
