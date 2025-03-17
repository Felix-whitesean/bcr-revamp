<?php

namespace App\Livewire;

use Livewire\Component;

class AdminManager extends Component
{
    public $r = 'home';

    protected $listeners = ['showSection'];

    public function showSection($r)
    {
        $this->r = $r;
        // $this->activeSection =  $r;
    }

    public function render()
    {
        return view('livewire.admin-manager');
    }
}
