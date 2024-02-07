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
use GuzzleHttp\Client;

class ProposalCreateForm extends Component
{
    use WithFileUploads;

    public $receivedFiles;
    public $photo;
    public $title;
    public $user_id;
    public $edition_id;
    public $content;
    public $category_id;
    public $street;
    public $postal_code;
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
    #[On('getCoordinates')]
    public function getCoordinates()
    {
//        $address = ($this->street ?? ''). " " . ($this->city ?? '') . " " . ($this->freguesia ?? '') . " " . ($this->postal_code ?? '');

        $client = new \GuzzleHttp\Client();

        $geocoder = new Geocoder($client);

        $geocoder->setApiKey(config('geocoder.key'));

        $geocoder->setCountry(config('geocoder.country', 'PT'));

        $coordinates = $geocoder->getCoordinatesForAddress('Rua da esperança n94, 2330-111 Entroncamento');
        $this->lat = $coordinates['lat'];
        $this->lng = $coordinates['lng'];

    }
    public function store(\Illuminate\Http\Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $this->user_id = auth()->user()->id;
        $this->validate(Proposal::rules());
        dd($this);
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
                ]);
        if($proposal) {
            if (!empty($this->receivedFiles['files'])) {
                if (count($this->receivedFiles['files']) > 1) {
                    $this->fileUploadHandle('cover', $proposal, true);
                } else {
                    $this->fileUploadHandle('cover', $proposal, false);
                }
            }


    //            }

            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('home'));
    }

    protected function fileUploadHandle($collection, $model, $isMultiple = false): void
    {
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
