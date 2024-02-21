<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Edition;
use App\Models\Proposal;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProposalGrid extends Component
{
    public $category_selected;
    public $status_selected;
    public $categories;
    public $showWinners;
    private $proposals;
    public $keywordsInput;
    public $edition_id;
    public $edition;
    protected $rules = [

    ];

    public function mount()
    {
        $this->categories = Category::get();
        $this->proposals = Proposal::with('user', 'category')
            ->where('edition_id', $this->edition_id)
            ->withCount('votes')
            ->paginate(9);
        $this->showWinners = false;
        $this->edition = Edition::find($this->edition_id);

    }

    public function winners(): void
    {
        $this->showWinners = !$this->showWinners;
        if($this->showWinners)
        {
            $this->proposals = Proposal::with('user', 'category')
                ->where('winner', 1)
                ->where('edition_id', $this->edition_id)
                ->withCount('votes')
                ->paginate(9);
        }
        else{
            $this->proposals = Proposal::with('user', 'category')
            ->where('edition_id', $this->edition_id)
            ->withCount('votes')
            ->paginate(9);
        }
    }
    public function filter()
    {
        if(!$this->category_selected && !$this->status_selected && !$this->keywordsInput)
        {
            return redirect()->route('propostas', ['id' => $this->edition_id]);
        }
        $query = Proposal::with('user', 'category')
            ->where('edition_id', $this->edition_id)
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

        $this->proposals = $query->paginate(9);
    }

    public function render()
    {
        $proposals = $this->proposals;
        if(auth()->user()){
            $user_id = auth()->user()->id;
            $user_proposals_count = Proposal::whereHas('user', function ($query) use ($user_id) {
                $query->where('id', $user_id);
            })->where('edition_id', $this->edition_id)->count();
        }
        return view('livewire.propostas.show-proposal-grid', ['proposals' => $proposals, 'user_proposals_count' => $user_proposals_count ?? 0, 'proposals_per_user' => $this->edition->proposals_per_user]);
    }
}
