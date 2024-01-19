<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProposalRequest;
use App\Http\Requests\UpdateProposalRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /**
     * Display a listing of the Proposal.
     */
    public function index(Request $request)
    {
        return view('proposals.index');
    }

    /**
     * Show the form for creating a new Proposal.
     */
    public function create()
    {
        $proposal = new Proposal();
        $proposal->loadDefaultValues();
        return view('proposals.create', compact('proposal'));
    }

    /**
     * Store a newly created Proposal in storage.
     */
    public function store(CreateProposalRequest $request)
    {
        dd("olá");
        $input = $request->all();


        /** @var Proposal $proposal */
        $proposal = Proposal::create($input);
        if($proposal){

            $this->fileUploadHandle($request, 'cover', 'cover', $proposal, false);
            //handle the file upload and delete
            $this->fileUploadHandle($request, 'file', 'files', $proposal, true);
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('home'));
    }

    /**
     * Display the specified Proposal.
     */
    public function show($id)
    {
        /** @var Proposal $proposal */
        $proposal = Proposal::find($id);

        if (empty($proposal)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('proposals.index'));
        }

        return view('proposals.show')->with('proposal', $proposal);
    }

    /**
     * Show the form for editing the specified Proposal.
     */
    public function edit($id)
    {
        /** @var Proposal $proposal */
        $proposal = Proposal::find($id);

        if (empty($proposal)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('proposals.index'));
        }

        return view('proposals.edit')->with('proposal', $proposal);
    }

    /**
     * Update the specified Proposal in storage.
     */
    public function update($id, UpdateProposalRequest $request)
    {
        /** @var Proposal $proposal */
        $proposal = Proposal::find($id);

        if (empty($proposal)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('proposals.index'));
        }

        $proposal->fill($request->all());
        if($proposal->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('proposals.index'));
    }

    /**
     * Remove the specified Proposal from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Proposal $proposal */
        $proposal = Proposal::find($id);

        if (empty($proposal)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('proposals.index'));
        }

        if($proposal->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('proposals.index'));
    }

    protected function fileUploadHandle($request, $fileName, $collection, $model, $isMultiple = false): void
    {
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
