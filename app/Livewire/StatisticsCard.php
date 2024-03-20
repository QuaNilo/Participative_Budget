<?php

namespace App\Livewire;

use Livewire\Component;

class StatisticsCard extends Component
{
    public $value;
    public $title;

    public function render()
    {
        return view('livewire.statistics-card');
    }
}
