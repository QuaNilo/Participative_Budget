<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEditionWinnerRequest;
use App\Http\Requests\UpdateEditionWinnerRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\EditionWinner;
use Illuminate\Http\Request;

class EditionWinnerController extends Controller
{
    /**
     * Display a listing of the EditionWinner.
     */
    public function index(Request $request)
    {
        return view('edition_winners.index');
    }

    /**
     * Show the form for creating a new EditionWinner.
     */
    public function create()
    {
        $editionWinner = new EditionWinner();
        $editionWinner->loadDefaultValues();
        return view('edition_winners.create', compact('editionWinner'));
    }

    /**
     * Store a newly created EditionWinner in storage.
     */
    public function store(CreateEditionWinnerRequest $request)
    {
        $input = $request->all();

        /** @var EditionWinner $editionWinner */
        $editionWinner = EditionWinner::create($input);
        if($editionWinner){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('edition-winners.index'));
    }

    /**
     * Display the specified EditionWinner.
     */
    public function show($id)
    {
        /** @var EditionWinner $editionWinner */
        $editionWinner = EditionWinner::find($id);

        if (empty($editionWinner)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('edition-winners.index'));
        }

        return view('edition_winners.show')->with('editionWinner', $editionWinner);
    }

    /**
     * Show the form for editing the specified EditionWinner.
     */
    public function edit($id)
    {
        /** @var EditionWinner $editionWinner */
        $editionWinner = EditionWinner::find($id);

        if (empty($editionWinner)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('edition-winners.index'));
        }

        return view('edition_winners.edit')->with('editionWinner', $editionWinner);
    }

    /**
     * Update the specified EditionWinner in storage.
     */
    public function update($id, UpdateEditionWinnerRequest $request)
    {
        /** @var EditionWinner $editionWinner */
        $editionWinner = EditionWinner::find($id);

        if (empty($editionWinner)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('edition-winners.index'));
        }

        $editionWinner->fill($request->all());
        if($editionWinner->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('edition-winners.index'));
    }

    /**
     * Remove the specified EditionWinner from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var EditionWinner $editionWinner */
        $editionWinner = EditionWinner::find($id);

        if (empty($editionWinner)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('edition-winners.index'));
        }

        if($editionWinner->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('edition-winners.index'));
    }
}
