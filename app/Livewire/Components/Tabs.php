<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Tabs extends Component
{

    public $tabs = ['Haircut', 'Styling', 'Hair Colour', 'Hair Texture', 'Hair Treatment', 'Skin Care', 'Nails'];
    public $activeTab = 'Haircut';

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }
    
    public function render()
    {
        return view('livewire.components.tabs');
    }
}
