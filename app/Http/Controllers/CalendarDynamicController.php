<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCalendarDynamicRequest;
use App\Http\Requests\UpdateCalendarDynamicRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\CalendarDynamic;
use Illuminate\Http\Request;

class CalendarDynamicController extends Controller
{
    /**
     * Display a listing of the CalendarDynamic.
     */
    public function index(Request $request)
    {
        return view('calendar_dynamics.index');
    }

    /**
     * Show the form for creating a new CalendarDynamic.
     */
    public function create()
    {
        $calendarDynamic = new CalendarDynamic();
        $calendarDynamic->loadDefaultValues();
        return view('calendar_dynamics.create', compact('calendarDynamic'));
    }

    /**
     * Store a newly created CalendarDynamic in storage.
     */
    public function store(CreateCalendarDynamicRequest $request)
    {
        $input = $request->all();

        /** @var CalendarDynamic $calendarDynamic */
        $calendarDynamic = CalendarDynamic::create($input);
        if($calendarDynamic){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('calendar-dynamics.index'));
    }

    /**
     * Display the specified CalendarDynamic.
     */
    public function show($id)
    {
        /** @var CalendarDynamic $calendarDynamic */
        $calendarDynamic = CalendarDynamic::find($id);

        if (empty($calendarDynamic)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('calendar-dynamics.index'));
        }

        return view('calendar_dynamics.show')->with('calendarDynamic', $calendarDynamic);
    }

    /**
     * Show the form for editing the specified CalendarDynamic.
     */
    public function edit($id)
    {
        /** @var CalendarDynamic $calendarDynamic */
        $calendarDynamic = CalendarDynamic::find($id);

        if (empty($calendarDynamic)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('calendar-dynamics.index'));
        }

        return view('calendar_dynamics.edit')->with('calendarDynamic', $calendarDynamic);
    }

    /**
     * Update the specified CalendarDynamic in storage.
     */
    public function update($id, UpdateCalendarDynamicRequest $request)
    {
        /** @var CalendarDynamic $calendarDynamic */
        $calendarDynamic = CalendarDynamic::find($id);

        if (empty($calendarDynamic)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('calendar-dynamics.index'));
        }

        $calendarDynamic->fill($request->all());
        if($calendarDynamic->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('calendar-dynamics.index'));
    }

    /**
     * Remove the specified CalendarDynamic from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var CalendarDynamic $calendarDynamic */
        $calendarDynamic = CalendarDynamic::find($id);

        if (empty($calendarDynamic)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('calendar-dynamics.index'));
        }

        if($calendarDynamic->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('calendar-dynamics.index'));
    }
}
