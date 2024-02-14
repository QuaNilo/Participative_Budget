<?php

namespace App\Livewire;

use App\Models\Citizen;
use App\Models\User;
use Laravel\Fortify\Rules\Password;
use Livewire\Component;

class ProfileDetails extends Component
{
    public $name;
    public $citizen;
    public $user;
    public $email;
    public $address;
    public $localidade;
    public $occupation;
    public $description;
    public $CC;


    public static function rulesUser(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:users',
        ];
    }

    public static function rulesCitizen(): array
    {
        return [
            'CC' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ];
    }

    public function mount()
    {
        $this->user = User::find(auth()->user()->id);
        $this->citizen = $this->user->citizen()->first();

//        Citizen INFO
        $this->address = $this->citizen->address ?? "";
        $this->CC = $this->citizen->CC ?? "";
        $this->occupation = $this->citizen->occupation ?? "";
        $this->description = $this->citizen->description ?? "";
        $this->localidade = $this->citizen->localidade ?? "";

//        User info
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }


public function update()
{
    if (empty($this->user)) {
        flash(__('User Not found'))->overlay()->danger();
        return redirect(route('proposals.index'));
    }

    if (empty($this->citizen)) {
        flash(__('Citizen info Not found'))->overlay()->danger();
        return redirect(route('proposals.index'));
    }

    // Validate user data if it needs to be updated
    if ($this->user->email != $this->email || $this->user->name != $this->name) {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:users,email,' . $this->user->id,
        ]);

        // Update user data
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email
        ]);
    }

    // Validate and update citizen data
    $this->validate([
        'CC' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'occupation' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'localidade' => 'nullable|string|max:255',
    ]);

    $this->citizen->update([
        'CC' => $this->CC,
        'address' => $this->address,
        'occupation' => $this->occupation,
        'description' => $this->description,
        'localidade' => $this->localidade
    ]);

    // Flash success message
    flash(__('Updated successfully.'))->overlay()->success();

    return redirect("/profile");
}

    public function render()
    {
        return view('livewire.profile-details');
    }
}
