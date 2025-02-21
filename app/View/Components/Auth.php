<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Auth extends Component
{
    /**
     * Create a new component instance.
     */
    public $formtype;
    public function __construct( $formtype='')
    {
        //
        $this -> formtype = $formtype;
    
    }
        //

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth');
    }
}
