<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVoteRequest;
use App\Http\Requests\UpdateVoteRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the Vote.
     */
    public function index(Request $request)
    {
        return view('votes.index');
    }

    /**
     * Show the form for creating a new Vote.
     */
    public function create()
    {
        $vote = new Vote();
        $vote->loadDefaultValues();
        return view('votes.create', compact('vote'));
    }

    /**
     * Store a newly created Vote in storage.
     */
    public function store(CreateVoteRequest $request)
    {
        $input = $request->all();

        /** @var Vote $vote */
        $vote = Vote::create($input);
        if($vote){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('votes.index'));
    }

    /**
     * Display the specified Vote.
     */
    public function show($id)
    {
        /** @var Vote $vote */
        $vote = Vote::find($id);

        if (empty($vote)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('votes.index'));
        }

        return view('votes.show')->with('vote', $vote);
    }

    /**
     * Show the form for editing the specified Vote.
     */
    public function edit($id)
    {
        /** @var Vote $vote */
        $vote = Vote::find($id);

        if (empty($vote)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('votes.index'));
        }

        return view('votes.edit')->with('vote', $vote);
    }

    /**
     * Update the specified Vote in storage.
     */
    public function update($id, UpdateVoteRequest $request)
    {
        /** @var Vote $vote */
        $vote = Vote::find($id);

        if (empty($vote)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('votes.index'));
        }

        $vote->fill($request->all());
        if($vote->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('votes.index'));
    }

    /**
     * Remove the specified Vote from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Vote $vote */
        $vote = Vote::find($id);

        if (empty($vote)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('votes.index'));
        }

        if($vote->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('votes.index'));
    }
}
