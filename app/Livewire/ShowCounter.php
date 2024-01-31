<?php

namespace App\Livewire;

use App\Models\Proposal;
use App\Models\User;
use App\Models\Vote;
use Livewire\Component;

class ShowCounter extends Component
{
    public $usersCount;
    public $proposalsCount;
    public $winnersCount;
    public $votesCount;
    public function render()
    {
        $this->usersCount = User::count();
        $this->proposalsCount = Proposal::count();
        $this->winnersCount = Proposal::where('winner', 1)
            ->count();
        $this->votesCount = Vote::count();
        return view('livewire.show-counter');
    }
}
