<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class Toast extends Component
{
    public $toast_title, $toast_message, $toast_type;
    /**
     * Create a new component instance.
     */
    public function __construct($toast_message="", $toast_type="", $toast_title="")
    {
        //
        // Can be success, error, warning, info
        // $this->toast_title = Session::get('toast_title');
        // $this->toast_message = Session::get('toast_message');
        // $this->toast_type = Session::get('toast_type');

        // $this->toast_title = $toast_title ?: Session::get('toast_title', '');
        // $this->toast_message = $toast_message ?: Session::get('toast_message', '');
        // $this->toast_type = $toast_type ?: Session::get('toast_type', '');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toast');
    }
}
