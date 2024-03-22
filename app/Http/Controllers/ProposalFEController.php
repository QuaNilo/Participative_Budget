<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProposalRequest;
use App\Http\Requests\UpdateProposalRequest;
use App\Models\Edition;
use App\Models\Proposal;
use App\Models\Vote;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProposalFEController extends Controller
{

    public function remove_vote($proposal_id)
    {
//        dd("Olá", $proposal_id);
        $proposal = Proposal::find($proposal_id);
        if ($proposal) {
            $deletedVotes = $proposal->votes()->where('user_id', auth()->user()->id)->delete();
            if ($deletedVotes > 0) {
                flash('Voto Apagado')->overlay()->success()->duration(3000);
                return Redirect::back()->with('success', 'Vote deleted successfully');
            }
            flash('Falha ao apagar voto')->overlay()->danger()->duration(3000);
            return Redirect::back()->with('error', 'Failed to delete Vote');
        }
    }

    public function show_frontend($id = null)
    {
        $validEditionStatuses = [
            Edition::STATUS_VOTING,
        ];
        if($id)
        {
            try {
                $edition = Edition::where('id', $id)->first();
            }catch(Exception $e)
            {
                \Log::error('Error Occurred' . $e->getMessage());
                return redirect()->route('display_warning', ['message' => __('Error finding the given Edition')]);
            }
            return view('site.propostas.index', ['edition' => $edition]);
        }

        if (Edition::whereIn('status', $validEditionStatuses)->exists()) {
            $edition = Edition::whereIn('status', $validEditionStatuses)->first();
            return view('site.propostas.index', ['edition' => $edition]);
        }

        return redirect()->route('display_warning', ['message' => __('No open edition found.')]);
    }

    public function show_frontend_create($id)
    {
        return view('site.propostas.create.index', ['edition_id' => $id]);
    }

    public function show_proposal($id)
    {
        $proposal = Proposal::with('user', 'category')
            ->where('id', $id)
            ->withCount('votes')
            ->first();
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

    public function edit($id)
    {
        /** @var Proposal $proposal */
        $proposal = Proposal::with('media')->find($id);

        if (empty($proposal)) {
            flash(__('Not found'))->overlay()->danger();
        }

        return view('site.profile.edit')->with('proposal', $proposal);
    }

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

    public function destroy($id)
    {
        /** @var Proposal $proposal */
        $proposal = Proposal::find($id);

        if (empty($proposal)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect()->back()->withInput()->withErrors(['message' => 'Validation failed.']);
        }

        if($proposal->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect()->back()->with('success', 'Operation successful!');
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
