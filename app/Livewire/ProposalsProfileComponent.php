<?php

namespace App\Livewire;

use App\Models\Proposal;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ProposalsProfileComponent extends Component
{
    use WithPagination;
    public $user;

    public function mount()
    {
        $this->user = User::find(auth()->user()->id);

    }
    public function render()
    {
        if($this->user->proposals())
        {
            $proposals = Proposal::where('user_id', $this->user->id)
                ->withCount('votes')
                ->orderByDesc('created_at')
                ->paginate(10);
        }
        return view('livewire.profile.proposals-component', ['proposals' => $proposals]);
    }
}
