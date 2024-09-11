<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{

    public $btnName;
    public $btnType = 'primary';
    public $route='';
    public $btnClass = '';

    public function redirectTo($route)
    {
        return redirect()->route($route);
    }

    public function render()
    {
        return view('livewire.components.button');
    }
}
