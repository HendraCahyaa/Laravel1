<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class portfolio extends Component
{
    public $title;
    public $step;
    public $img;
    public $href;
    public $filter;
    public $data;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $step, $img, $href, $data, $filter)
    {
        $this->title =$title;
        $this->step =$step;
        $this->img =$img;
        $this->href =$href;
        $this->filter =$filter;
        $this->data =$data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portfolio',[
            'data'=> 'portfolio-galery-'
        ]);
    }
}
