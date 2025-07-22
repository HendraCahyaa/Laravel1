<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class pricing extends Component
{
    public $title;
    public $price;
    public $deskripsi;
    public $btn;
    public $delay;
    public $features;
    public $ispopular;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $price, $deskripsi, $btn, $delay, $features, $ispopular)
    {
        $this->title = $title;
        $this->price = $price;
        $this->deskripsi = $deskripsi;
        $this->btn = $btn;
        $this->delay = $delay;
        $this->features = $features;
        $this->ispopular = $ispopular;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pricing');
    }
}
