<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Proposal;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProposalGrid extends Component
{
    public $category_selected;
    public $status_selected;
    public $categories;
    private $proposals;
    public $sortField = 'votes_count';

    public function sortVotes()
    {
        $this->sortField = 'votes_count';
    }

    public function sortLatest()
    {
        $this->sortField = 'created_at';
    }

    public function mount()
    {
        $this->categories = Category::get();
        $this->refreshProposals();
        $this->status_selected = '*';
    }


        public function paginationView()
    {
        return view('components.frontend.propostas.pagination');
    }

    private function refreshProposals()
    {
        if(is_numeric($this->category_selected))
        {
            $category = Category::find($this->category_selected);
            $this->proposals = $category->proposals()
            ->with('user', 'category')
            ->where('status', $this->status_selected)
            ->withCount('votes')
            ->orderByDesc($this->sortField)
            ->paginate(9);
        }
        else
        {
            $this->proposals = Proposal::with('user', 'category')
                ->withCount('votes')
                ->where('status', $this->status_selected)
                ->orderByDesc($this->sortField)
                ->paginate(9);
        }
    }

    public function render()
    {
        $this->refreshProposals();
        $proposals = $this->proposals;
        return view('livewire.propostas.show-proposal-grid', ['proposals' => $proposals]);
    }
}
