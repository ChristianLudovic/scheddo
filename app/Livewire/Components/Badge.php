<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Badge extends Component
{

    public $badgeName;

    public function render()
    {
        return view('livewire.components.badge');
    }
}
