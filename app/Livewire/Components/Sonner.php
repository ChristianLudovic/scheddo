<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Sonner extends Component
{

    public $showNotification = false;

    protected $listeners = ['triggerNotification'];

    public function triggerNotification()
    {
        $this->showNotification = true;
    }

    public function render()
    {
        return view('livewire.components.sonner');
    }
}
