<?php

namespace App\View\Components;

use App\Models\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DynamicTag extends Component
{
    public $title_tag, $id, $content, $title_content;

    public function __construct($id)
    {
        $section = Section::find($id);
        
        $this->title_tag = $section?->title_tag ?? 'h6';
        $this->content = $section?->content ?? "No content";
        $this->title_content = $section?->title ?? 'No title';
        $this->id = $id;
    }

    public function render(): View|Closure|string
    {
        return view('components.dynamic-content', [
            'title_tag' => $this->title_tag,
            'content' => $this->content,
            'title_content' => $this->title_content,
            'id' => $this->id,
        ]);
    }
}