<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the Settings.
     */
    public function index(Request $request)
    {
        return view('settings.index');
    }

    /**
     * Show the form for creating a new Settings.
     */
    public function create()
    {
        $settings = new Settings();
        $settings->loadDefaultValues();
        return view('settings.create', compact('settings'));
    }

    /**
     * Store a newly created Settings in storage.
     */
    public function store(CreateSettingsRequest $request)
    {
        $input = $request->all();

        /** @var Settings $settings */
        $settings = Settings::create($input);
        if($settings){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('settings.index'));
    }

    /**
     * Display the specified Settings.
     */
    public function show($id)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        return view('settings.show')->with('settings', $settings);
    }

    /**
     * Show the form for editing the specified Settings.
     */
    public function edit($id)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        return view('settings.edit')->with('settings', $settings);
    }

    /**
     * Update the specified Settings in storage.
     */
    public function update($id, UpdateSettingsRequest $request)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        $settings->fill($request->all());
        if($settings->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('settings.index'));
    }

    /**
     * Remove the specified Settings from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        if($settings->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('settings.index'));
    }
}
