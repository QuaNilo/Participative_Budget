<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the Category.
     */
    public function index(Request $request)
    {
        return view('categories.index');
    }

    /**
     * Show the form for creating a new Category.
     */
    public function create()
    {
        $category = new Category();
        $category->loadDefaultValues();
        return view('categories.create', compact('category'));
    }

    /**
     * Store a newly created Category in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();

        /** @var Category $category */
        $category = Category::create($input);
        if($category){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Category.
     */
    public function show($id)
    {
        /** @var Category $category */
        $category = Category::find($id);

        if (empty($category)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified Category.
     */
    public function edit($id)
    {
        /** @var Category $category */
        $category = Category::find($id);

        if (empty($category)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified Category in storage.
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        /** @var Category $category */
        $category = Category::find($id);

        if (empty($category)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('categories.index'));
        }

        $category->fill($request->all());
        if($category->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Category $category */
        $category = Category::find($id);

        if (empty($category)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('categories.index'));
        }

        if($category->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('categories.index'));
    }
}
