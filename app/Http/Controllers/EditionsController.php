<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEditionsRequest;
use App\Http\Requests\UpdateEditionsRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Editions;
use Illuminate\Http\Request;

class EditionsController extends Controller
{
    /**
     * Display a listing of the Editions.
     */
    public function index(Request $request)
    {
        return view('editions.index');
    }

    /**
     * Show the form for creating a new Editions.
     */
    public function create()
    {
        $editions = new Editions();
        $editions->loadDefaultValues();
        return view('editions.create', compact('editions'));
    }

    /**
     * Store a newly created Editions in storage.
     */
    public function store(CreateEditionsRequest $request)
    {
        $input = $request->all();

        /** @var Editions $editions */
        $editions = Editions::create($input);
        if($editions){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('editions.index'));
    }

    /**
     * Display the specified Editions.
     */
    public function show($id)
    {
        /** @var Editions $editions */
        $editions = Editions::find($id);

        if (empty($editions)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        return view('editions.show')->with('editions', $editions);
    }

    /**
     * Show the form for editing the specified Editions.
     */
    public function edit($id)
    {
        /** @var Editions $editions */
        $editions = Editions::find($id);

        if (empty($editions)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        return view('editions.edit')->with('editions', $editions);
    }

    /**
     * Update the specified Editions in storage.
     */
    public function update($id, UpdateEditionsRequest $request)
    {
        /** @var Editions $editions */
        $editions = Editions::find($id);

        if (empty($editions)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        $editions->fill($request->all());
        if($editions->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('editions.index'));
    }

    /**
     * Remove the specified Editions from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Editions $editions */
        $editions = Editions::find($id);

        if (empty($editions)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('editions.index'));
        }

        if($editions->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('editions.index'));
    }
}
