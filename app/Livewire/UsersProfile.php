<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;

class UsersProfile extends Component
{
    public $tab;
    public $proposals;

    public function render()
    {
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
