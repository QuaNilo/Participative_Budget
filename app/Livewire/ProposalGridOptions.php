<?php

namespace App\Livewire;

use App\Models\Proposal;
use Livewire\Component;

class ProposalGridOptions extends Component
{
    public $edition;
    public $showWinners;
    public $user_proposals_count;

    public function winnersToParent()
    {
        $this->showWinners = !$this->showWinners;
        $this->dispatch('winnersFromChildren');
    }

    public function mount()
    {
    }
    public function render()
    {
        $user_id = auth()->user()->id;
        $this->user_proposals_count = Proposal::whereHas('user', function ($query) use ($user_id) {
                $query->where('id', $user_id);
            })->where('edition_id', $this->edition->id)->count();

        return view('livewire.proposal-grid-options');
    }
}
