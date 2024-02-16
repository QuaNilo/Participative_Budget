<?php

namespace App\Livewire;

use App\Models\Citizen;
use App\Models\User;
use Laravel\Fortify\Rules\Password;
use Livewire\Attributes\On;
use Livewire\Component;

class ProfileDetails extends Component
{
    public $receivedFiles;
    public $name;
    public $citizen;
    public $user;
    public $email;
    public $address;
    public $cod_postal;
    public $telemovel;
    public $freguesia;
    public $localidade;
    public $occupation;
    public $description;
    public $CC;

    public function mount()
    {
        $this->user = User::find(auth()->user()->id);
        $this->citizen = $this->user->citizen()->first();

//        Citizen INFO
        $this->address = $this->citizen->address ?? "";
        $this->telemovel = $this->citizen->telemovel ?? "";
        $this->freguesia = $this->citizen->freguesia ?? "";
        $this->cod_postal = $this->citizen->cod_postal ?? "";
        $this->CC = $this->citizen->CC ?? "";
        $this->occupation = $this->citizen->occupation ?? "";
        $this->description = $this->citizen->description ?? "";
        $this->localidade = $this->citizen->localidade ?? "";

//        User info
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }


    #[On('update-files')]
    public function onFilesUpdated($files): void
    {

        if (!empty($files['files'])) {
            $this->receivedFiles = $files;
        }
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
        'cod_postal' => 'nullable|numeric|max:9999',
        'freguesia' => 'nullable|string|max:60',
        'telemovel' => 'nullable|numeric',
        'CC' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'occupation' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'localidade' => 'nullable|string|max:255',
    ]);

    $this->citizen->update([
        'cod_postal' => $this->cod_postal,
        'freguesia' => $this->freguesia,
        'telemovel' => $this->telemovel,
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
