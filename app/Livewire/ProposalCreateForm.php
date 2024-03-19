<?php

namespace App\Livewire;

use App\Http\Requests\CreateProposalRequest;
use App\Livewire\Forms\ProposalForm;
use App\Models\Category;
use App\Models\Proposal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Request;
use Salman\GeoCode\Services\GeoCode;
use Spatie\Geocoder\Geocoder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use GuzzleHttp\Client;

class ProposalCreateForm extends Component
{
    use WithFileUploads;

    public $receivedFiles;
    public $receivedDocuments;
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
    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.propostas.create.proposal-create-form', ['categories' => $categories]);
    }
    #[On('update-files')]
    public function onFilesUpdated($files): void
    {
        if (!empty($files['files'])) {
            $this->receivedFiles = $files;
        }
    }

    #[On('remove-file')]
    protected function removeMediaHandling($file): void
    {
        if (isset($this->receivedFiles['files'])) {
            foreach ($this->receivedFiles['files'] as $key => $receivedFile) {
                if ($receivedFile === $file) {
                    unset($this->receivedFiles['files'][$key]);
                }
            }
        }
    }


    #[On('update-files-documents')]
    public function onDocumentsUpdated($files): void
    {
        if (!empty($files['files'])) {
            $this->receivedDocuments = $files;
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
    public function store(\Illuminate\Http\Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $this->user_id = auth()->user()->id;
        $this->validate(Proposal::rules());
        /** @var Proposal $proposal */
                $proposal = Proposal::create([
                    'title' => $this->title,
                    'user_id' => $this->user_id,
                    'edition_id' => $this->edition_id,
                    'content' => $this->content,
                    'category_id' => $this->category_id,
                    'street' => $this->street,
                    'postal_code' => $this->postal_code,
                    'lat' => $this->lat,
                    'lng' => $this->lng,
                    'city' => $this->city,
                    'url' => $this->url,
                    'freguesia' => $this->freguesia,
                    'budget_estimate' => $this->budget_estimate
                ]);
        if($proposal) {
            if (!empty($this->receivedFiles['files'])) {
                if (count($this->receivedFiles['files']) > 1) {
                    $this->fileUploadHandle('gallery', $proposal, true);
                } else {
                    $this->fileUploadHandle('gallery', $proposal, false);
                }
            }

            if(!empty($this->receivedCover['files']))
            {
                $this->fileUploadHandle('cover', $proposal, false);
            }

            if (!empty($this->receivedDocuments['files'])) {
                if (count($this->receivedDocuments['files']) > 1) {
                    $this->fileUploadHandle('documents', $proposal, true);
                } else {
                    $this->fileUploadHandle('documents', $proposal, false);
                }
            }

            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect()->route('propostas', ['id' => $this->edition_id]);
    }

    protected function fileUploadHandle($collection, $model, $isMultiple = false): void
    {
        if($collection === 'cover')
        {
            $model->addMedia(storage_path("app/livewire-tmp/" . $this->receivedCover['files'][0]['filename']))
                    ->usingName($this->receivedCover['files'][0]['originalName'])//get the media original name at the same index as the media item
                    ->toMediaCollection('cover');
        }
        elseif ($collection === 'documents')
        {
            if($isMultiple){
                foreach($this->receivedDocuments['files'] as $file ){
                    $model->addMedia(storage_path("app/livewire-tmp/" . $file['filename']))
                        ->usingName($file['originalName'])//get the media original name at the same index as the media item
                        ->toMediaCollection($collection);
                }
            }else{
                $model->addMedia(storage_path("app/livewire-tmp/" . $this->receivedDocuments['files'][0]['filename']))
                    ->usingName($this->receivedDocuments['files'][0]['originalName'])//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }
        }
        else{
            if($isMultiple){
                foreach($this->receivedFiles['files'] as $file ){
                    $model->addMedia(storage_path("app/livewire-tmp/" . $file['filename']))
                        ->usingName($file['originalName'])//get the media original name at the same index as the media item
                        ->toMediaCollection('gallery');
                }
            }else{
                $model->addMedia(storage_path("app/livewire-tmp/" . $this->receivedFiles['files'][0]['filename']))
                    ->usingName($this->receivedFiles['files'][0]['originalName'])//get the media original name at the same index as the media item
                    ->toMediaCollection('gallery');
            }
        }
    }

}
