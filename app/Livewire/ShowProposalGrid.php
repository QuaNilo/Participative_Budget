<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Proposal;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProposalGrid extends Component
{
    public $category_selected;
    public $status_selected;
    public $categories;
    private $proposals;
    public $keywordsInput;

    protected $rules = [

    ];

    public function mount()
    {
        $this->categories = Category::get();
        $this->proposals = Proposal::with('user', 'category')
            ->withCount('votes')
            ->paginate(9);
        $this->status_selected = '*';
    }


    public function filter()
    {
//        $this->validate($this->rules);
        $query = Proposal::with('user', 'category')
            ->withCount('votes');

        if(is_numeric($this->status_selected)){
            $query->where('status', $this->status_selected);
        }

        if (is_numeric($this->category_selected)) {
            $query->whereHas('category', function ($categoryQuery) {
                $categoryQuery->where('id', $this->category_selected);
            });
        }

        if (!empty($this->keywordsInput)) {
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
        return view('livewire.propostas.show-proposal-grid', ['proposals' => $proposals]);
    }
}
