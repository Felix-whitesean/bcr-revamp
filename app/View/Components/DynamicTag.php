<?php
namespace App\View\Components;

// use App\Models\Setting; // Ensure you import the Setting model
use App\Models\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DynamicTag extends Component
{
    public $title_tag, $id, $content, $title_content;
    

    public function __construct($id)
    {
        $this->title_tag = Section::find($id)?->title_tag ?? 'h6';
        $this->content = Section::find($id)->content ?? new Section();
        $this->title_content = Section::find($id)->title ?? new Section();
        $this -> id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
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
