<?php

namespace App\Livewire;

use Livewire\Component;

class ProposalGridOptions extends Component
{
    public $edition;
    public $showWinners;

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
        return view('livewire.proposal-grid-options');
    }
}
