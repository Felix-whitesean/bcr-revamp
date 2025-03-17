<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Section;

class MissionAndVision extends Component
{
    /**
     * Create a new component instance.
     */
    public $content;
    public function __construct()
    {
        //
        $this -> mission = "";
        $this->content = Section::where('name', 'about')->value('content') ?? '<p>No content available.</p>';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about.mission-and-vision');
    }
}
