<?php

namespace App\Http\Controllers;

use App\Helpers\HelperMethods;
use App\Http\Requests\CreateHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the Home.
     */
    public function index(Request $request)
    {
        return view('homes.index');
    }

    /**
     * Show the form for creating a new Home.
     */
    public function create()
    {
        $home = new Home();
        $home->loadDefaultValues();
        return view('homes.create', compact('home'));
    }

    /**
     * Store a newly created Home in storage.
     */
    public function store(CreateHomeRequest $request)
    {
        $input = $request->all();

        /** @var Home $home */
        $home = Home::create($input);
        if($home){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('homes.index'));
    }

    /**
     * Display the specified Home.
     */
    public function show($id)
    {
        /** @var Home $home */
        $home = Home::find($id);

        if (empty($home)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('homes.index'));
        }

        return view('homes.show')->with('home', $home);
    }

    /**
     * Show the form for editing the specified Home.
     */
    public function edit($id)
    {
        /** @var Home $home */
        $home = Home::find($id);

        if (empty($home)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('homes.index'));
        }

        return view('homes.edit')->with('home', $home);
    }

    /**
     * Update the specified Home in storage.
     */
    public function update($id, UpdateHomeRequest $request)
    {
//        $requestData = $request->except(['_token', '_method']);
        /** @var Home $home */
        $home = Home::find($id);
        if (empty($home)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('homes.index'));
        }
//        $home->fill($requestData);
        if($home->save()){
            HelperMethods::fileUploadHandle($request, 'wallpaper', 'wallpaper', $home, false);
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('homes.index'));
    }

    /**
     * Remove the specified Home from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Home $home */
        $home = Home::find($id);

        if (empty($home)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('homes.index'));
        }

        if($home->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('homes.index'));
    }

    public function cookies()
    {
        return view('site.home.cookies');
    }

    public function privacyPolicy()
    {
        return view('site.home.privacy_policy');
    }

    public function termsOfService()
    {
        return view('site.home.terms_of_service');
    }


}
