<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChapterRequest;
use App\Http\Requests\UpdateChapterRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Chapter;
use App\Models\Regulation;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the Chapter.
     */
    public function index(Request $request)
    {
        return view('chapters.index');
    }

    /**
     * Show the form for creating a new Chapter.
     */
    public function create()
    {
        $chapter = new Chapter();
        $chapter->loadDefaultValues();
        return view('chapters.create', compact('chapter'));
    }

    /**
     * Store a newly created Chapter in storage.
     */
    public function store()
    {

        $input = request()->all();
        $input['regulation_id'] = Regulation::first()->id;
        if(empty($input['regulation_id']))
        {
            flash(__('Crie um regulamento primeiro.'))->overlay()->success();
            return redirect(route('regulations.create'));
        }
        /** @var Chapter $chapter */
        $chapter = Chapter::create($input);
        if($chapter){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('chapters.index'));
    }

    /**
     * Display the specified Chapter.
     */
    public function show($id)
    {
        /** @var Chapter $chapter */
        $chapter = Chapter::find($id);

        if (empty($chapter)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chapters.index'));
        }

        return view('chapters.show')->with('chapter', $chapter);
    }

    /**
     * Show the form for editing the specified Chapter.
     */
    public function edit($id)
    {
        /** @var Chapter $chapter */
        $chapter = Chapter::find($id);

        if (empty($chapter)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chapters.index'));
        }

        return view('chapters.edit')->with('chapter', $chapter);
    }

    /**
     * Update the specified Chapter in storage.
     */
    public function update($id, UpdateChapterRequest $request)
    {
        /** @var Chapter $chapter */
        $chapter = Chapter::find($id);

        if (empty($chapter)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chapters.index'));
        }

        $chapter->fill($request->all());
        if($chapter->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('chapters.index'));
    }

    /**
     * Remove the specified Chapter from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Chapter $chapter */
        $chapter = Chapter::find($id);

        if (empty($chapter)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('chapters.index'));
        }

        if($chapter->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('chapters.index'));
    }
}
