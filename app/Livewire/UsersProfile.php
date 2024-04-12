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
        $this->hasVotes = !auth()->user()->votes->isEmpty();
        $this->hasProposals = !auth()->user()->proposals->isEmpty();
        return view('livewire.users-profile');
    }


    public function logout()
    {
        Auth::logout(); // Logs out the currently authenticated user

        // Redirect to the login page or any other desired page
        return redirect()->route('login');
    }

    public function mount()
    {
        $this->tab = 'dashboard';
    }

    public function setActiveTab($value)
    {
        $this->tab = $value;
    }
}
