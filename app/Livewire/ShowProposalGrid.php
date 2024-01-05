<?php

namespace App\Livewire;

use App\Models\Proposal;
use Livewire\Component;

class ShowProposalGrid extends Component
{
    public $proposals = [];

    public function render()
    {
        $this->proposals = Proposal::with('user')->get();
        return view('livewire.propostas.show-proposal-grid');
    }
}
