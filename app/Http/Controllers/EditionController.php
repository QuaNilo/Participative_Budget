<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEditionRequest;
use App\Http\Requests\UpdateEditionRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Edition;
use Illuminate\Http\Request;

class EditionController extends Controller
{
    /**
     * Display a listing of the Edition.
     */
    public function index(Request $request)
    {
        return view('editions.index');
    }

    /**
     * Show the form for creating a new Edition.
     */
    public function create()
    {
        $edition = new Edition();
        $edition->loadDefaultValues();
        return view('editions.create', compact('edition'));
    }

    /**
     * Store a newly created Edition in storage.
     */
    public function store(CreateEditionRequest $request)
    {
        $input = $request->all();

        /** @var Edition $edition */
        $edition = Edition::create($input);
        if($edition){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('editions.index'));
    }

    /**
     * Display the specified Edition.
     */
    public function show($id)
    {
        /** @var Edition $edition */
        $edition = Edition::find($id);

        if (empty($edition)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        return view('editions.show')->with('edition', $edition);
    }

    /**
     * Show the form for editing the specified Edition.
     */
    public function edit($id)
    {
        /** @var Edition $edition */
        $edition = Edition::find($id);

        if (empty($edition)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        return view('editions.edit')->with('edition', $edition);
    }

    /**
     * Update the specified Edition in storage.
     */
    public function update($id, UpdateEditionRequest $request)
    {
        /** @var Edition $edition */
        $edition = Edition::find($id);

        if (empty($edition)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        $edition->fill($request->all());
        if($edition->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('editions.index'));
    }

    /**
     * Remove the specified Edition from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Edition $edition */
        $edition = Edition::find($id);

        if (empty($edition)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        if($edition->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('editions.index'));
    }
}
