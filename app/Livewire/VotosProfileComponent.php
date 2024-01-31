<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class VotosProfileComponent extends Component
{
    public $votes;

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        if($user->votes())
        {
            $this->votes = $user->votes()->with('proposal')
                ->orderBy('created_at', 'desc')
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.profile.votos-profile-component');
    }
}
