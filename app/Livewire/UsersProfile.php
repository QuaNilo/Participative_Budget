<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;

class UsersProfile extends Component
{
    public $tab;
    public $proposals;
    public $hasProposals;
    public $hasVotes;


    public function render()
    {
        return view('livewire.users-profile');
    }




    public function mount()
    {
        $this->tab = 'dashboard';
    }


}
