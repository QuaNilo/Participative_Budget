<?php

namespace App\Livewire;

use App\Models\proposal;
use Livewire\Component;

class ShowProposals extends Component
{
    public $proposals = [];

    public function render()
    {
        return view('livewire.show-proposals');
    }

        public function mount()
    {
        $this->proposals = Proposal::with('user')->get();
    }
}
