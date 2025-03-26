<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ToggleState;

class ManageAccount extends Component
{
    public $username;

    public function mount()
    {
        $this->username = Auth::user()->name;
    }
    public function render()
    {
        return view('livewire.manage-account');
    }
}
