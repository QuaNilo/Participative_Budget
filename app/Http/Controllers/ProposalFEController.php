<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProposalRequest;
use App\Models\Proposal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProposalFEController extends Controller
{
    public function show_frontend($edition_id)
    {
        return view('site.propostas.index', ['edition_id' => $edition_id]);
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
//    public function store(Request $request)
//    {
//        $input = request()->all();
//        $input['user_id'] = auth()->user()->id;
//        $input['edition_id'] = 2;
//
//        /** @var Proposal $proposal */
//        $proposal = Proposal::create($input);
//        if($proposal){
//            $proposal->addMediaFromRequest('files')
//                ->toMediaCollection('cover'); // Replace 'your_media_collection' with your desired collection name
//            flash(__('Saved successfully.'))->overlay()->success();
//        }else{
//            flash(__('Ups something went wrong'))->overlay()->danger();
//        }
//
//        return redirect(route('propostas'));
//    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate(Proposal::rules());

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['edition_id'] = 2;
        /** @var Proposal $proposal */
        $proposal = Proposal::create($input);
        if($proposal) {
            $file_names = $request->input('files');
            $original_file_names = $request->input('files_original_name');
//            dd($file_names, $input, request());
            if (count($file_names) > 1) {
                // Multiple files
                $this->fileUploadHandle($input, $file_names, 'cover', $proposal, true );
            } else {
                // Single file
                $this->fileUploadHandle($input, $file_names[0], 'cover', $proposal, false);
            }

            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('demos.index'));
    }

    protected function fileUploadHandle($request, $file_names, $collection, $model, $isMultiple = false): void
    {
        if($isMultiple == false) {
            if (!empty($file_id = $request->input($file_names . '_delete'))) {
                if (!empty($model->getMedia($collection)->where('id', $file_id)->first())) {
                    $model->getMedia($collection)->where('id', $file_id)->first()->delete();
                }
            }
            if (!empty($file = $request->input($file_names))) {
                $model->addMedia(storage_path("app/livewire-tmp/" . $file))
//                    ->usingName($request->input($file_names . '_original_name'))//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }
        }else{ // is multiple
//            foreach ($file_names  as $file_name) {
//                $file_name .= '_delete';
//                if(!empty($model->getMedia($collection)->where('id', $file_name)->first())){
//                    $model->getMedia($collection)->where('id', $file_name)->first()->delete();
//                }
//            }
            foreach ($file_names as $file_name) {
                $model->addMedia(storage_path( "app/livewire-tmp/" . $file_name))
//                    ->usingName($request->input($file_names . '_original_name',[])[$index])//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }

        }
    }
}
