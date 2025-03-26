<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class AdminManager extends Component
{
    public $r = 'home';

    protected $listeners = ['showSection'];

    public function showSection($r)
    {
        $this->r = $r;
    }

    public function render()
    {
        return view('livewire.dashboard.admin-manager');
    }
}
