<?php

namespace App\Livewire;

use Livewire\Component;

class ShowMap extends Component
{
    public $lat;
    public $lng;

    public function render()
    {
        return view('livewire.show-map');
    }
}
