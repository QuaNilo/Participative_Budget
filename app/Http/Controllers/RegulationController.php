<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegulationRequest;
use App\Http\Requests\UpdateRegulationRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    /**
     * Display a listing of the Regulation.
     */
    public function index()
    {
//        return view('regulations.index');
        dd("aqui");
        $regulation = Regulation::first();
        dd($regulation);
        if (empty($regulation)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('regulations.create'));
        }

        return view('regulations.edit')->with('regulation', $regulation);
    }

    /**
     * Show the form for creating a new Regulation.
     */
    public function create()
    {
        $regulation = new Regulation();
        $regulation->loadDefaultValues();
        return view('regulations.create', compact('regulation'));
    }

    /**
     * Store a newly created Regulation in storage.
     */
    public function store(CreateRegulationRequest $request)
    {
        $input = $request->all();

        /** @var Regulation $regulation */
        $regulation = Regulation::create($input);
        if($regulation){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('regulations.index'));
    }

    /**
     * Display the specified Regulation.
     */
    public function show($id)
    {
        /** @var Regulation $regulation */
        $regulation = Regulation::find($id);

        if (empty($regulation)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('regulations.index'));
        }

        return view('regulations.show')->with('regulation', $regulation);
    }

    /**
     * Show the form for editing the specified Regulation.
     */
    public function edit($id)
    {
        /** @var Regulation $regulation */
        $regulation = Regulation::find($id);

        if (empty($regulation)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('regulations.index'));
        }

        return view('regulations.edit')->with('regulation', $regulation);
    }

    /**
     * Update the specified Regulation in storage.
     */
    public function update($id, UpdateRegulationRequest $request)
    {
        /** @var Regulation $regulation */
        $regulation = Regulation::find($id);

        if (empty($regulation)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('regulations.index'));
        }

        $regulation->fill($request->all());
        if($regulation->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('regulations.index'));
    }

    /**
     * Remove the specified Regulation from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Regulation $regulation */
        $regulation = Regulation::find($id);

        if (empty($regulation)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('regulations.index'));
        }

        if($regulation->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('regulations.index'));
    }
}
