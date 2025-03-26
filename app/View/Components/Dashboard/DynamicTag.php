<?php

namespace App\View\Components\Dashboard;

use App\Models\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class DynamicTag extends Component
{
    public $title_tag, $id, $content, $title_content, $priority;

    public function __construct($id, $priority= 1)
    {
        $section = Section::find($id);
        
        $this->title_tag = $section?->title_tag ?? 'h6';
        $this->content = $section?->content ?? "No content";
        $this->title_content = $section?->title ?? 'No title';
        $this->id = $id;
        $this->priority = $priority;
        $priviledge = Auth::user()?->priviledges ?? 0;

        if($priviledge == 2 && $priority == 2){
            $this->canEdit = true;
        }
        else{
            $this->canEdit = false;
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.reusable.container', [
            'title_tag' => $this->title_tag,
            'content' => $this->content,
            'title_content' => $this->title_content,
            'id' => $this->id,
            'canEdit' => $this->canEdit,
        ]);
    }
}