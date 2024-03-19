<?php

namespace App\Http\Controllers;

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
            $this->fileUploadHandle($request, 'wallpaper', 'wallpaper', $home, false);
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

        protected function fileUploadHandle($request, $fileName, $collection, $model, $isMultiple = false): void
    {
        if($isMultiple == false) {
            if (!empty($file_id = $request->input($fileName . '_delete'))) {
                if (!empty($model->getMedia($collection)->where('id', $file_id)->first())) {
                    $model->getMedia($collection)->where('id', $file_id)->first()->delete();
                }
            }
            if (!empty($file = $request->input($fileName))) {
                $model->addMedia(storage_path("app/livewire-tmp/" . $file))
                    ->usingName($request->input($fileName . '_original_name'))//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }
        }else{ // is multiple
            foreach ($request->input($fileName . '_delete', []) as $file_id) {
                if(!empty($model->getMedia($collection)->where('id', $file_id)->first())){
                    $model->getMedia($collection)->where('id', $file_id)->first()->delete();
                }
            }
            foreach ($request->input($fileName, []) as $index => $file) {
                $model->addMedia(storage_path( "app/livewire-tmp/" . $file))
                    ->usingName($request->input($fileName . '_original_name',[])[$index])//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }

        }

        if(!empty($files = session('files'))){
            foreach ($files as $file){
                dd($file);
                $model->deleteMedia($file->id);
                $folderPath = 'public/' . $file->model_id;
                if (Storage::exists($folderPath)) {
                    // Delete the folder
                    Storage::deleteDirectory($folderPath);
                }
                else{
                    dd("failed to delete");
                }

            }
        }
    }

}
