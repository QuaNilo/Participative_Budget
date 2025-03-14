<?php

namespace App\Http\Controllers;

use App\Helpers\HelperMethods;
use App\Http\Requests\CreateSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the Setting.
     */
    public function index(Request $request)
    {
        $setting = Setting::find(1);
        return view('settings.edit')->with('setting', $setting);
    }

    /**
     * Show the form for creating a new Setting.
     */
    public function create()
    {
        $setting = new Setting();
        $setting->loadDefaultValues();
        return view('settings.create', compact('setting'));
    }

    /**
     * Store a newly created Setting in storage.
     */
    public function store(CreateSettingRequest $request)
    {
        $input = $request->all();

        /** @var Setting $setting */
        $setting = Setting::create($input);
        if($setting){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('settings.index'));
    }

    /**
     * Display the specified Setting.
     */
    public function show($id)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

        if (empty($setting)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        return view('settings.show')->with('setting', $setting);
    }

    /**
     * Show the form for editing the specified Setting.
     */
    public function edit($id)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

        if (empty($setting)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        return view('settings.edit')->with('setting', $setting);
    }

    /**
     * Update the specified Setting in storage.
     */
    public function update($id, UpdateSettingRequest $request)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

        if (empty($setting)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('settings.index'));
        }

        $setting->fill($request->all());
        if($setting->save()){
            HelperMethods::fileUploadHandle($request, 'contact_us_wallpaper', 'contact_us_wallpaper', $setting);
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('settings.index'));
    }

    /**
     * Remove the specified Setting from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

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

    public function change_language($language)
    {
        app()->setLocale($language);
        session(['locale' => $language]);
        flash(__('Language Changed to') . ' ' . (app()->getLocale() === 'pt' ? 'Português' : 'English'))->overlay()->success()->duration(2500);
        return redirect()->back();
    }
}
