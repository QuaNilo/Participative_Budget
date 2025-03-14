<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCitizenRequest;
use App\Http\Requests\UpdateCitizenRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CitizenController extends Controller
{
    /**
     * Display a listing of the Citizen.
     */
    public function index(Request $request)
    {

        return view('citizens.index');
    }


    /**
     * Show the form for creating a new Citizen.
     */
    public function create()
    {
        $citizen = new Citizen();
        $citizen->loadDefaultValues();
        return view('citizens.create', compact('citizen'));
    }

    /**
     * Store a newly created Citizen in storage.
     */
    public function store(CreateCitizenRequest $request)
    {
        $input = $request->all();

        /** @var Citizen $citizen */
        $citizen = Citizen::create($input);
        if($citizen){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('citizens.index'));
    }

    /**
     * Display the specified Citizen.
     */
    public function show($id)
    {
        /** @var Citizen $citizen */
        $citizen = Citizen::find($id);

        if (empty($citizen)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('citizens.index'));
        }

        return view('citizens.show')->with('citizen', $citizen);
    }

    /**
     * Show the form for editing the specified Citizen.
     */
    public function edit($id)
    {
        /** @var Citizen $citizen */
        $citizen = Citizen::find($id);

        if (empty($citizen)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('citizens.index'));
        }

        return view('citizens.edit')->with('citizen', $citizen);
    }

    /**
     * Update the specified Citizen in storage.
     */
    public function update($id, UpdateCitizenRequest $request)
    {
        /** @var Citizen $citizen */
        $citizen = Citizen::find($id);
        if (empty($citizen)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('citizens.index'));
        }

            // Check for duplicate entry
        $duplicate = Citizen::where('CC', $request->CC)->where('id', '!=', $id)->exists();
        if ($duplicate) {
            return redirect()->route('display_warning', ['message' => __('Citizen Card Already in Use')]);
        }

        $citizen->fill($request->all());
        if($citizen->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('citizens.index'));
    }

    /**
     * Remove the specified Citizen from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Citizen $citizen */
        $citizen = Citizen::find($id);

        if (empty($citizen)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('citizens.index'));
        }

        if($citizen->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('citizens.index'));
    }


    public function rejectCc(Request $request,Citizen $citizen)
    {
        if($citizen)
        {
            $citizen->update(['CC_verified' => Citizen::APPROVAL_STATUS_REJECTED, 'CC_verified_at' => now()]);
            flash(__('Updated Citizen Successfully'))->overlay()->success()->duration(4000);
            return Redirect::route('citizens.index');
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::route('citizens.index');
    }

    public function indexPending(Request $request)
    {
        return view('citizens.index');
    }

    public function approveCc(Request $request, Citizen $citizen)
    {
        if($citizen)
        {
            $citizen->update(['CC_verified' => Citizen::APPROVAL_STATUS_ACCEPTED, 'CC_verified_at' => now()]);
            flash(__('Updated Citizen Successfully'))->overlay()->success()->duration(4000);
            return Redirect::route('citizens.index');
        }

        flash(__('Failed Updating Citizen'))->overlay()->danger()->duration(4000);
        return Redirect::route('citizens.index');
    }


    public function showVerifyWizard(Citizen $citizen)
    {
        return view('citizens.verify-wizard', ['citizen' => $citizen]);
    }
}
