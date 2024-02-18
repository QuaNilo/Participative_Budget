<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardProfile extends Component
{
    public $setting;

    public function mount()
    {
        $this->setting = \App\Models\Setting::first();
    }

    public function render()
    {
        return view('livewire.profile.dashboard-profile');
    }
}
