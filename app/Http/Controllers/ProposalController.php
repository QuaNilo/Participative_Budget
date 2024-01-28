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
        $input = $request->all();

        /** @var Proposal $proposal */
        $proposal = Proposal::create($input);
        if($proposal){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('proposals.index'));
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
}
