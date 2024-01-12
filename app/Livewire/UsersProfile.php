<?php

namespace App\Livewire;

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

    public function mount()
    {
        $this->tab = 'details';
    }
    public function setActiveTab($value)
    {
        $this->tab = $value;
    }
}
