<?php

namespace App\Livewire;

use App\Http\Requests\CreateProposalRequest;
use App\Livewire\Forms\ProposalForm;
use App\Models\Category;
use App\Models\Proposal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Request;
use Salman\GeoCode\Services\GeoCode;
use Spatie\Geocoder\Geocoder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use GuzzleHttp\Client;

class ProposalEdit extends Component
{
    use WithFileUploads;

    public $proposal;

    public $receivedFiles;
    public $receivedCover;
    public $photo;
    public $title;
    public $user_id;
    public $edition_id;
    public $content;
    public $category_id;
    public $street;
    public $postal_code;
    public $budget_estimate;
    public $city;
    public $freguesia;
    public $lng;
    public $lat;
    public $url;
    protected $listeners = ['updateCoordinates'];

    public function mount()
    {
        $this->title = $this->proposal->title;
        $this->lat = $this->proposal->lat;
        $this->lng = $this->proposal->lng;
        $this->url = $this->proposal->url;
        $this->street = $this->proposal->street;
        $this->postal_code = $this->proposal->postal_code;
        $this->city = $this->proposal->city;
        $this->freguesia = $this->proposal->freguesia;
        $this->user_id = $this->proposal->user->id;
        $this->edition_id = $this->proposal->edition_id;
        $this->content = $this->proposal->content;
        $this->category_id = $this->proposal->category->id;
        $this->budget_estimate = $this->proposal->budget_estimate;
    }

    public function update()
    {

        if (empty($this->proposal)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('users_dashboard'));
        }

        $this->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:32000',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'street' => 'nullable|string|max:60',
            'postal_code' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:60',
            'freguesia' => 'nullable|string|max:60',
            'url' => 'nullable|string|max:255',
            'budget_estimate' => 'nullable|numeric|max:9999999'
        ]);

        $this->proposal->update([
           'category_id' => $this->category_id,
           'title' => $this->title,
           'content' => $this->content,
           'lat' => $this->lat,
           'lng' => $this->lng,
           'street' => $this->street,
           'postal_code' => $this->postal_code,
           'city' => $this->city,
           'freguesia' => $this->freguesia,
           'url' => $this->url,
            'budget_estimate' => $this->budget_estimate
        ]);
        if (!empty($this->receivedFiles['files'])) {
            if (count($this->receivedFiles['files']) > 1) {
                $this->fileUploadHandle('gallery', $this->proposal, true);
            } else {
                $this->fileUploadHandle('gallery', $this->proposal, false);
            }
        }

        if(!empty($this->receivedCover['files']))
        {
            $this->fileUploadHandle('cover', $this->proposal, false);
        }

        flash(__('Updated successfully.'))->overlay()->success();

        return redirect(route('users_dashboard'));
    }

    #[On('update-files')]
    public function onFilesUpdated($files): void
    {

        if (!empty($files['files'])) {
            $this->receivedFiles = $files;
        }
    }

    #[On('update-files-cover')]
    public function onCoverUpdated($files): void
    {
        if (!empty($files['files'])) {
            $this->receivedCover = $files;
        }
    }

    #[On('getCoordinates')]
    public function getCoordinates()
    {
        $address = ($this->street ?? ''). " " . ($this->postal_code ?? '') . " " . ($this->city ?? '') . " " . ($this->freguesia ?? '');

        $client = new \GuzzleHttp\Client();

        $geocoder = new Geocoder($client);

        $geocoder->setApiKey(config('geocoder.key'));

        $geocoder->setCountry(config('geocoder.country', 'PT'));

        $coordinates = $geocoder->getCoordinatesForAddress($address);
        $this->lat = $coordinates['lat'];
        $this->lng = $coordinates['lng'];
        $this->dispatch('changedCoordinates', $this->lat, $this->lng);
    }


    protected function fileUploadHandle($collection, $model, $isMultiple = false): void
    {
        if($collection === 'cover')
        {
            $model->addMedia(storage_path("app/livewire-tmp/" . $this->receivedCover['files'][0]['filename']))
                ->usingName($this->receivedCover['files'][0]['originalName'])//get the media original name at the same index as the media item
                ->toMediaCollection('cover');
        }
        else{
            if($isMultiple){
                foreach($this->receivedFiles['files'] as $file ){
                    $model->addMedia(storage_path("app/livewire-tmp/" . $file['filename']))
                        ->usingName($file['originalName'])//get the media original name at the same index as the media item
                        ->toMediaCollection();
                }
            }else{
    //            dd($this->receivedFiles['files'][0], $this->receivedFiles['files'], $this->receivedFiles, $this->receivedFiles['files'][0]['filename'], $this->receivedFiles['files'][0]->filename);
                $model->addMedia(storage_path("app/livewire-tmp/" . $this->receivedFiles['files'][0]['filename']))
                    ->usingName($this->receivedFiles['files'][0]['originalName'])//get the media original name at the same index as the media item
                    ->toMediaCollection();
            }
        }

    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.profile.proposal-edit', ['categories' => $categories]);
    }
}
