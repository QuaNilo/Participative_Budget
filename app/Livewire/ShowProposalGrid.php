<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Edition;
use App\Models\Proposal;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProposalGrid extends Component
{

    use WithPagination;

    public $category_selected;
    public $status_selected;
    public $categories;
    public $showWinners;
    private $proposals;
    public $keywordsInput;
    public $edition;
    protected $rules = [

    ];

    public function mount()
    {
        $this->categories = Category::get();
        $this->proposals = $this->getProposals();
        $this->showWinners = false;

    }
    #[On('winnersFromChildren')]
    public function winners(): void
    {
        $this->showWinners = !$this->showWinners;
        if($this->showWinners)
        {
            $this->proposals = Proposal::with('user', 'category')
                ->where('winner', 1)
                ->where('edition_id', $this->edition->id)
                ->withCount('votes')
                ->paginate(9);
        }
        else{
            $this->proposals = Proposal::with('user', 'category')
            ->where('edition_id', $this->edition->id)
            ->withCount('votes')
            ->paginate(9);
        }
    }
    public function filter($sort = null)
    {
        if((!$this->category_selected && !$this->status_selected && !$this->keywordsInput) && !$sort)
        {
            return redirect()->route('propostas', ['id' => $this->edition->id]);
        }
        $query = Proposal::with('user', 'category')
            ->where('edition_id', $this->edition->id)
            ->withCount('votes');

        if($this->status_selected){
//            dd($this->status_selected);
            $query->where('status', $this->status_selected);
        }

        if ($this->category_selected) {
//            dd($this->category_selected);
            $query->whereHas('category', function ($categoryQuery) {
                $categoryQuery->where('id', $this->category_selected);
            });
        }

        if (!empty($this->keywordsInput)) {
//            dd($this->keywordsInput);
            $query->where(function ($keywordQuery) {
                $keywordQuery->where('title', 'like', '%' . $this->keywordsInput . '%');
//                    ->orWhere('summary', 'like', '%' . $this->keywordsInput . '%');
//                    ->orWhere('content', 'like', '%' . $this->keywordsInput . '%');
            });
        }

        if($sort)
        {
            if($sort['order'] == 'asc')
            {
                $query->orderBy($sort['sorter']);
            }
            elseif($sort['order'] == 'desc')
            {
                $query->orderByDesc($sort['sorter']);
            }
        }

        $this->proposals = $query->paginate(9);
    }
    #[On('sortToParent')]
    public function sort($data)
    {
        $this->filter($data);
    }

    protected function getProposals()
    {
        $proposals = Proposal::with('user', 'category')
            ->where('edition_id', $this->edition->id)
            ->withCount('votes')
            ->paginate(9);
        return $proposals;
    }

    public function render()
    {
        $proposals = $this->proposals;
        if(!$proposals)
        {
            $proposals = $this->getProposals();
        }
        if(auth()->user()){
            $user_id = auth()->user()->id;
            $user_proposals_count = Proposal::whereHas('user', function ($query) use ($user_id) {
                $query->where('id', $user_id);
            })->where('edition_id', $this->edition->id)->count();
        }
        return view('livewire.propostas.show-proposal-grid', ['proposals' => $proposals, 'user_proposals_count' => $user_proposals_count ?? 0, 'proposals_per_user' => $this->edition->proposals_per_user]);
    }
}
