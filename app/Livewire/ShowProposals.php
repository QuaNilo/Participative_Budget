<?php

namespace App\Livewire;

use App\Models\proposal;
use Livewire\Component;

class ShowProposals extends Component
{

    public function render()
    {
        $proposals = Proposal::with('user')->paginate(6);

        return view('livewire.propostas.show-proposals', ['proposals' => $proposals]);
    }
}
