<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHomeBulletPointsRequest;
use App\Http\Requests\UpdateHomeBulletPointsRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Home;
use App\Models\HomeBulletPoints;
use Illuminate\Http\Request;

class HomeBulletPointsController extends Controller
{
    /**
     * Display a listing of the HomeBulletPoints.
     */
    public function index(Request $request)
    {
        return view('home_bullet_points.index');
    }

    /**
     * Show the form for creating a new HomeBulletPoints.
     */
    public function create()
    {
        $homeBulletPoints = new HomeBulletPoints();
        $homeBulletPoints->loadDefaultValues();
        return view('home_bullet_points.create', compact('homeBulletPoints'));
    }

    /**
     * Store a newly created HomeBulletPoints in storage.
     */
    public function store(CreateHomeBulletPointsRequest $request)
    {
        $input = $request->all();
        $input['home_id'] = Home::first()->id;

        /** @var HomeBulletPoints $homeBulletPoints */
        $homeBulletPoints = HomeBulletPoints::create($input);
        if($homeBulletPoints){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('homes.index'));
    }

    /**
     * Display the specified HomeBulletPoints.
     */
    public function show($id)
    {
        /** @var HomeBulletPoints $homeBulletPoints */
        $homeBulletPoints = HomeBulletPoints::find($id);

        if (empty($homeBulletPoints)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-bullet-points.index'));
        }

        return view('home_bullet_points.show')->with('homeBulletPoints', $homeBulletPoints);
    }

    /**
     * Show the form for editing the specified HomeBulletPoints.
     */
    public function edit($id)
    {
        /** @var HomeBulletPoints $homeBulletPoints */
        $homeBulletPoints = HomeBulletPoints::find($id);

        if (empty($homeBulletPoints)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-bullet-points.index'));
        }

        return view('home_bullet_points.edit')->with('homeBulletPoints', $homeBulletPoints);
    }

    /**
     * Update the specified HomeBulletPoints in storage.
     */
    public function update($id, UpdateHomeBulletPointsRequest $request)
    {
        /** @var HomeBulletPoints $homeBulletPoints */
        $homeBulletPoints = HomeBulletPoints::find($id);

        if (empty($homeBulletPoints)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-bullet-points.index'));
        }

        $homeBulletPoints->fill($request->all());
        if($homeBulletPoints->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('home-bullet-points.index'));
    }

    /**
     * Remove the specified HomeBulletPoints from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var HomeBulletPoints $homeBulletPoints */
        $homeBulletPoints = HomeBulletPoints::find($id);

        if (empty($homeBulletPoints)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('home-bullet-points.index'));
        }

        if($homeBulletPoints->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('home-bullet-points.index'));
    }
}
