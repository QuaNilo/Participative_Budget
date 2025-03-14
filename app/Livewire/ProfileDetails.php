<?php

namespace App\Livewire;

use App\Models\Citizen;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Rules\Password;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProfileDetails extends Component
{
    public $receivedCitizenCard;
    public $genderArray;
    public $name;
    public $citizen;
    public $user;
    public $email;
    #[Validate('nullable|string|max:255')]
    public $address;
    #[Validate('nullable|regex:/^\d{4}-\d{3}$/')]
    public $cod_postal;
    #[Validate('nullable|string|max:255|regex:/^\d{9}$/')]
    public $telemovel;
    #[Validate('nullable|string|max:255')]
    public $freguesia;
    #[Validate('nullable|string|max:255')]
    public $localidade;
    #[Validate('nullable|string|max:255')]
    public $occupation;
    #[Validate('nullable|string|max:255')]
    public $description;
    #[Validate('nullable')]
    public $gender;
    #[Validate('nullable|date')]
    public $birth_date;
    #[Validate('nullable|string|max:9')]
    public $CC;

    public function render()
    {
        return view('livewire.profile-details');
    }

    public function mount()
    {
        $this->genderArray = Citizen::getGenderArray();
        $this->user = User::find(auth()->user()->id);
        $this->citizen = $this->user->citizen()->first();

//        Citizen INFO
        $this->birth_date = !empty($this->citizen->birth_date) ? $this->citizen->birth_date->format('Y-m-d') : '';
        $this->address = $this->citizen->address ?? "";
        $this->telemovel = $this->citizen->telemovel ?? "";
        $this->freguesia = $this->citizen->freguesia ?? "";
        $this->cod_postal = $this->citizen->cod_postal ?? "";
        $this->CC = $this->citizen->CC ?? "";
        $this->occupation = $this->citizen->occupation ?? "";
        $this->description = $this->citizen->description ?? "";
        $this->localidade = $this->citizen->localidade ?? "";
        $this->gender = $this->citizen->gender ?? "";

//        User info
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }


    #[On('update-files-citizen-card')]
    public function onCoverUpdated($files): void
    {
        if (!empty($files['files'])) {
            $this->receivedCitizenCard = $files;
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
        $this->validate();
//        $this->validate(Citizen::rules());
//        $this->validate([
//            'CC' => 'nullable|string|max:9',
//            'occupation' => 'nullable|string|max:255',
//            'description' => 'nullable|string|max:255',
//            'birth_date' => 'nullable|date',
//            'address' => 'nullable|string|max:255',
//            'localidade' => 'nullable|string|max:255',
//            'freguesia' => 'nullable|string|max:255',
//            'cod_postal' => 'nullable|regex:/^\d{4}-\d{3}$/',
//            'telemovel' => 'nullable|string|max:255|regex:/^\d{9}$/',
//            'gender' => 'nullable',
//        ]);

        $this->citizen->update([
            'cod_postal' => $this->cod_postal,
            'freguesia' => $this->freguesia,
            'telemovel' => $this->telemovel,
            'birth_date' => $this->birth_date,
            'CC' => $this->CC,
            'address' => $this->address,
            'occupation' => $this->occupation,
            'description' => $this->description,
            'localidade' => $this->localidade
        ]);

        if($this->citizen && !empty($this->receivedCitizenCard['files'])) {
            if (count($this->receivedCitizenCard['files']) > 1) {
                $this->fileUploadHandle('cc', $this->citizen, true);
            } else {
                $this->fileUploadHandle('cc', $this->citizen, false);
            }
        }
        if(Setting::first()->require_cc_vote_create &&  $this->citizen->getMedia('cc')->isEmpty())
        {
            flash(__('Your ID will be required to vote and create proposals.'))->overlay()->warning()->duration(4000);
        }

        flash(__('Updated successfully.'))->overlay()->success()->duration(4000);

        return redirect(route('users_dashboard_show_dashboard'));
    }

    protected function fileUploadHandle($collection, $model, $isMultiple = false): void
    {
        if($isMultiple){
            foreach($this->receivedCitizenCard['files'] as $file ){
                $model->addMedia(storage_path("app/livewire-tmp/" . $file['filename']))
                    ->usingName($file['originalName'])//get the media original name at the same index as the media item
                    ->toMediaCollection('cc');
            }
        }else{
            $model->addMedia(storage_path("app/livewire-tmp/" . $this->receivedCitizenCard['files'][0]['filename']))
                ->usingName($this->receivedCitizenCard['files'][0]['originalName'])//get the media original name at the same index as the media item
                ->toMediaCollection('cc');
        }
    }


}
