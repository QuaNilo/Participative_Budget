<?php

namespace App\Livewire;

use App\Models\Edition;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class VotosProfileComponent extends Component
{
    use WithPagination;
    public $validEditionStatusToDeleteVote;
    public function mount()
    {
        $this->validEditionStatusToDeleteVote = [
            Edition::STATUS_VOTING,
        ];
    }

    public function render()
    {
        $user = User::find(auth()->user()->id);
        if($user->votes())
        {
            $votes = $user->votes()->with('proposal')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }
        return view('livewire.profile.votos-profile-component', ['votes' => $votes]);
    }
}
