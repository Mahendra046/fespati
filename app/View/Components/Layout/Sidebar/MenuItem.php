<?php

namespace App\View\Components\Layout\Sidebar;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $icon;
    public $label;
    public $url;

    public function __construct($label = null , $icon = null , $url = null)
    {
        if(!$url) throw new Exception("Component Menu Item Memerlukan URL");
        $this->label = $label;
        $this->icon = $icon;
        $this->url = is_string($url) ? url($url) : "";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.sidebar.menu-item');
    }
}
