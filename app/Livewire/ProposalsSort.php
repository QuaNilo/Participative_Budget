<?php

namespace App\Livewire;

use Livewire\Component;

class ProposalsSort extends Component
{

    public $sorter;
    public $order;
    public function mount()
    {
        $this->sorter = null;
        $this->order = null;
    }

    public function sortToParent($sorter, $order){
        $this->dispatch('sortToParent', ['sorter' => $sorter, 'order' => $order]);
        $this->sorter = $sorter;
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.proposals-sort');
    }
}
