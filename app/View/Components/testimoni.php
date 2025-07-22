<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class testimoni extends Component
{
    public $name;
    public $pekerjaan;
    public $img;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $pekerjaan, $img)
    {
        $this->name =$name;
        $this->pekerjaan =$pekerjaan;
        $this->img =$img;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimoni');
    }
}
