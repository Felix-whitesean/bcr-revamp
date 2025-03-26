<?php

namespace App\Livewire\Home;

use Livewire\Component;

class DynamicContent extends Component
{
    
    public $page = 'home';

    protected $listeners = ['showSection'];

    public function showSection($page)
    {
        $this->page = $page;
        $this->activeSection =  $page;
    }

    public function render()
    {
        return view('livewire.home.dynamic-content');
    }
}
