<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHomeInfoRequest;
use App\Http\Requests\UpdateHomeInfoRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Home;
use App\Models\HomeInfo;
use Illuminate\Http\Request;

class HomeInfoController extends Controller
{
    /**
     * Display a listing of the HomeInfo.
     */
    public function index(Request $request)
    {
        return view('home_infos.index');
    }

    /**
     * Show the form for creating a new HomeInfo.
     */
    public function create()
    {
        $homeInfo = new HomeInfo();
        $homeInfo->loadDefaultValues();
        return view('home_infos.create', compact('homeInfo'));
    }

    /**
     * Store a newly created HomeInfo in storage.
     */
    public function store(CreateHomeInfoRequest $request)
    {
        $input = $request->all();
        $input['home_id'] = Home::first()->id;

        /** @var HomeInfo $homeInfo */
        $homeInfo = HomeInfo::create($input);
        if($homeInfo){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('homes.index'));
    }

    /**
     * Display the specified HomeInfo.
     */
    public function show($id)
    {
        /** @var HomeInfo $homeInfo */
        $homeInfo = HomeInfo::find($id);

        if (empty($homeInfo)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-infos.index'));
        }

        return view('home_infos.show')->with('homeInfo', $homeInfo);
    }

    /**
     * Show the form for editing the specified HomeInfo.
     */
    public function edit($id)
    {
        /** @var HomeInfo $homeInfo */
        $homeInfo = HomeInfo::find($id);

        if (empty($homeInfo)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-infos.index'));
        }

        return view('home_infos.edit')->with('homeInfo', $homeInfo);
    }

    /**
     * Update the specified HomeInfo in storage.
     */
    public function update($id, UpdateHomeInfoRequest $request)
    {
        /** @var HomeInfo $homeInfo */
        $homeInfo = HomeInfo::find($id);

        if (empty($homeInfo)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-infos.index'));
        }

        $homeInfo->fill($request->all());
        if($homeInfo->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('home-infos.index'));
    }

    /**
     * Remove the specified HomeInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var HomeInfo $homeInfo */
        $homeInfo = HomeInfo::find($id);

        if (empty($homeInfo)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-infos.index'));
        }

        if($homeInfo->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('home-infos.index'));
    }
}
