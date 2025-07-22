<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class processitem extends Component
{
    public $title;
    public $icon;
    public $step;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $icon, $step=null)
    {
        $this->title =$title;
        $this->icon =$icon;
        $this->step =$step;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.processitem');
    }
}
