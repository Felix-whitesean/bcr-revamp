<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ToggleState;

class ManageAccount extends Component
{
    public $isOn;

    public function mount() {
        $this->isOn = ToggleState::first()->is_on;
    }

    public function toggle() {
        $this->isOn = !$this->isOn;
        ToggleState::first()->update(['is_on' => $this->isOn]);
    }

    public function render()
    {
        return view('livewire.manage-account');
    }
}
