<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{

    public $btnName;
    public $btnType = 'primary';
    public $route='';
    public $btnClass = '';

    public function triggerNotification()
    {
        $this->dispatch('triggerNotification');
    }

    public function handleClick()
    {
        if ($this->btnName != 'Continue with Google') {
            $this->triggerNotification();
        }
        
        if ($this->route) {
            return redirect()->route($this->route);
        }
    }

    public function render()
    {
        return view('livewire.components.button');
    }
}
