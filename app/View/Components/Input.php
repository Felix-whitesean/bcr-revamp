<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $id, $type, $inputName, $maxlength, $placeholder, $label, $status, $style, $bindString, $formtype;
    public function __construct($id='', $type='', $inputName='', $maxlength='', $placeholder='', $label='', $status='', $style='', $bindString='', $formtype='')
    {
        //
        $this -> id = $id;
        $this -> type = $type;
        $this -> inputName = $inputName;
        $this -> maxlength = $maxlength;
        $this -> placeholder = $placeholder;
        $this -> label = $label;
        $this -> status = $status;
        $this -> style = $style;
        $this -> bindString = $bindString;
        $this ->formtype = $formtype;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-components.input');
    }
}
