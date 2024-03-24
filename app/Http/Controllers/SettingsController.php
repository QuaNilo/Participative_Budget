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
        $setting = new Settings();
        $setting->loadDefaultValues();
        return view('settings.create', compact('setting'));
    }

    /**
     * Store a newly created Settings in storage.
     */
    public function store(CreateSettingsRequest $request)
    {
        $input = $request->all();

        /** @var Settings $setting */
        $setting = Settings::create($input);
        if($setting){
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
        /** @var Settings $setting */
        $setting = Settings::find($id);

        if (empty($setting)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        return view('settings.show')->with('settings', $setting);
    }

    /**
     * Show the form for editing the specified Settings.
     */
    public function edit($id)
    {
        /** @var Settings $setting */
        $setting = Settings::find($id);

        if (empty($setting)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        return view('settings.edit')->with('settings', $setting);
    }

    /**
     * Update the specified Settings in storage.
     */
    public function update($id, UpdateSettingsRequest $request)
    {
        /** @var Settings $setting */
        $setting = Settings::find($id);

        if (empty($setting)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        $setting->fill($request->all());
        if($setting->save()){
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
        /** @var Settings $setting */
        $setting = Settings::find($id);

        if (empty($setting)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        if($setting->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('settings.index'));
    }
}
