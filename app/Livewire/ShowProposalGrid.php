<?php

namespace App\Livewire;

use App\Models\Proposal;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProposalGrid extends Component
{
    public $sortField = 'votes_count';

    public function sortVotes()
    {
        $this->sortField = 'votes_count';
    }

    public function sortLatest()
    {
        $this->sortField = 'created_at';
    }



    public function render()
    {
        $proposals = Proposal::with('user', 'category')
            ->withCount('votes')
            ->orderByDesc($this->sortField)
            ->paginate(10);
        return view('livewire.propostas.show-proposal-grid', ['proposals' => $proposals]);
    }
}
