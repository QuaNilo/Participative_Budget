<?php

namespace App\Livewire;

use Livewire\Component;

class UsersProfile extends Component
{
    public $tab;

    public function render()
    {
        return view('livewire.users-profile');
    }

    public function mount()
    {
        $this->tab = 'details';
    }
    public function setActiveTab($value)
    {
        $this->tab = $value;
    }
}
