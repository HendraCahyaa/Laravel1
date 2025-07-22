<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class contact extends Component
{
    public $title;
    public $icon;
    public $delay;
    /**
     * Create a new component instance.
     */
    public function __construct($icon, $title, $delay)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->delay = $delay;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact');
    }
}
