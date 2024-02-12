<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Regulation;

class EditRegulation extends Component
{

    public $regulation;

    public function mount()
    {
       $this->regulation = Regulation::first();
    }
    public function render()
    {
        return view('livewire.regulation');
    }
}
