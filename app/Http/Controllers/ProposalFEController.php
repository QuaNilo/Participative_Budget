<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProposalRequest;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProposalFEController extends Controller
{
    public function show_frontend()
    {
        return view('site.propostas.index');
    }

    public function show_frontend_create()
    {
        return view('site.propostas.create.index');
    }

    public function show_proposal($id)
    {
        $proposal = Proposal::find($id);
        return view('site.propostas.proposta.index', ['proposal' => $proposal]);
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function store(Request $request)
    {
        $input = request()->all();
        $input['user_id'] = auth()->user()->id;
        $input['edition_id'] = 2;

        /** @var Proposal $proposal */
        $proposal = Proposal::create($input);
        if($proposal){
            $proposal->addMediaFromRequest('files')
                ->toMediaCollection('cover'); // Replace 'your_media_collection' with your desired collection name
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('propostas'));
    }

    protected function fileUploadHandle($request, $fileName, $collection, $model, $isMultiple = false): void
    {
        dd($fileName);
        if($isMultiple == false) {
            if (!empty($file_id = $request->input($fileName . '_delete'))) {
                if (!empty($model->getMedia($collection)->where('id', $file_id)->first())) {
                    $model->getMedia($collection)->where('id', $file_id)->first()->delete();
                }
            }
            if (!empty($file = $request->input($fileName))) {
                $model->addMedia(storage_path("app/livewire-tmp/" . $file))
                    ->usingName($request->input($fileName . '_original_name'))//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }
        }else{ // is multiple
            foreach ($request->input($fileName . '_delete', []) as $file_id) {
                if(!empty($model->getMedia($collection)->where('id', $file_id)->first())){
                    $model->getMedia($collection)->where('id', $file_id)->first()->delete();
                }
            }
            foreach ($request->input($fileName, []) as $index => $file) {
                $model->addMedia(storage_path( "app/livewire-tmp/" . $file))
                    ->usingName($request->input($fileName . '_original_name',[])[$index])//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }

        }
    }
}
