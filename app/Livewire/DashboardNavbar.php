<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardNavbar extends Component
{
    public $tab;

    public function logout()
    {
        Auth::logout(); // Logs out the currently authenticated user

        // Redirect to the login page or any other desired page
        return redirect()->route('login');
    }

    public function mount($tab)
    {
        $this->tab = $tab;
    }

    public function render()
    {
        return view('livewire.profile.dashboard-navbar');
    }
}
