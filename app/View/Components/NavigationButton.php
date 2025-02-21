<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $link, $iconClass, $page, $isActive;

    public function __construct($link = '#', $iconClass = '#', $page='hero')
    {
        //
        $this-> link = $link;
        $this-> iconClass = $iconClass;
        $this-> page = $page;

        $this->isActive = request()->get('page') === $page;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.navigation-button');
    }
}
