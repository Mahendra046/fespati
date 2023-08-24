<?php

namespace App\View\Components\Layout\Depan\Header;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $url;
    public $class;
    public function __construct($label = null , $url = null , $class = null)
    {
        if(!$url) throw new Exception("Component Menu Item Memerlukan URL");
        $this->label = $label;
        $this->class = $class;
        $this->url = is_string($url) ? url($url) : "";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.depan.header.menu-item');
    }
}
