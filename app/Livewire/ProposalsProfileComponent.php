<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ProposalsProfileComponent extends Component
{
    public $proposals;

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        if($user->proposals())
        {
            $this->proposals = $user->proposals()->withCount('votes')->get();
        }
    }
    public function render()
    {
        return view('livewire.profile.proposals-component');
    }
}
