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
use Livewire\Component;
use Livewire\WithFileUploads;
use Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProposalCreateForm extends Component
{
    use WithFileUploads;

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
    public $coordinateY;
    public $coordinateX;


    public function mount()
    {
    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.propostas.create.proposal-create-form', ['categories' => $categories]);
    }

        public function store(\Illuminate\Http\Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
        {
        $this->user_id = auth()->user()->id;
        $this->edition_id = 2;
//        dd($request, $this);
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
                    'coordinateX' => $this->coordinateX,
                    'coordinateY' => $this->coordinateY,
                    'city' => $this->city,
                    'freguesia' => $this->freguesia,
                ]);
        if($proposal) {
            $file = $this->photo;

//            if (count($file_names) > 1) {
//                // Multiple files
//                $this->fileUploadHandle($request, $file_names, 'cover', $proposal, true );
//            } else {
//                // Single file
                $this->fileUploadHandle($request, $file, 'cover', $proposal, false);
//            }

            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('home'));
    }

    protected function fileUploadHandle($request, $file, $collection, $model, $isMultiple = false): void
    {
        if($isMultiple == false) {

            if (!empty($file)) {
                $model->addMedia(storage_path("app/livewire-tmp/" . $file->getFilename()))
//                    ->usingName($request->input($file_names . '_original_name'))//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }
//        }else{
////            foreach ($files as $file) {
////                $model->addMedia(storage_path( "app/livewire-tmp/" . $file->filename))
////                    ->toMediaCollection($collection);
////            }
//
        }
    }

}
