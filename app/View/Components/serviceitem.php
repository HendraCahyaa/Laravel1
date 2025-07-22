<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class serviceitem extends Component
{
    public $icon;
    public $title;
    public $step;
    public $icon2;
    /**
     * Create a new component instance.
     */
    public function __construct($icon, $title, $step=null, $icon2)
    {
        $this->icon =$icon;
        $this->title =$title;
        $this->step =$step;
        $this->icon2 =$icon2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.serviceitem');
    }
}
