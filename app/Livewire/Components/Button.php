<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{

    public $btnName;
    public $btnType = 'primary';

    public function render()
    {
        return view('livewire.components.button');
    }
}
