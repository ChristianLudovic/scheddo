<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AppointmentCard extends Component
{
    public $date;
    public $time;
    public $cardType='default';
    public $serviceType;
    

    public function mount($date, $time, $serviceType)
    {
        $this->date = $date;
        $this->time = $time;
        $this->serviceType = $serviceType;
    }

    public function render()
    {
        return view('livewire.components.appointment-card');
    }
}
