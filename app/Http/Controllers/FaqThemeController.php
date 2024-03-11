<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqThemeRequest;
use App\Http\Requests\UpdateFaqThemeRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\FaqTheme;
use Illuminate\Http\Request;

class FaqThemeController extends Controller
{
    /**
     * Display a listing of the FaqTheme.
     */
    public function index(Request $request)
    {
        return view('faq_themes.index');
    }

    /**
     * Show the form for creating a new FaqTheme.
     */
    public function create()
    {
        $faqTheme = new FaqTheme();
        $faqTheme->loadDefaultValues();
        return view('faq_themes.create', compact('faqTheme'));
    }

    /**
     * Store a newly created FaqTheme in storage.
     */
    public function store(CreateFaqThemeRequest $request)
    {
        $input = $request->all();

        /** @var FaqTheme $faqTheme */
        $faqTheme = FaqTheme::create($input);
        if($faqTheme){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('faq-themes.index'));
    }

    /**
     * Display the specified FaqTheme.
     */
    public function show($id)
    {
        /** @var FaqTheme $faqTheme */
        $faqTheme = FaqTheme::find($id);

        if (empty($faqTheme)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faq-themes.index'));
        }

        return view('faq_themes.show')->with('faqTheme', $faqTheme);
    }

    /**
     * Show the form for editing the specified FaqTheme.
     */
    public function edit($id)
    {
        /** @var FaqTheme $faqTheme */
        $faqTheme = FaqTheme::find($id);

        if (empty($faqTheme)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faq-themes.index'));
        }

        return view('faq_themes.edit')->with('faqTheme', $faqTheme);
    }

    /**
     * Update the specified FaqTheme in storage.
     */
    public function update($id, UpdateFaqThemeRequest $request)
    {
        /** @var FaqTheme $faqTheme */
        $faqTheme = FaqTheme::find($id);

        if (empty($faqTheme)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faq-themes.index'));
        }

        $faqTheme->fill($request->all());
        if($faqTheme->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('faq-themes.index'));
    }

    /**
     * Remove the specified FaqTheme from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var FaqTheme $faqTheme */
        $faqTheme = FaqTheme::find($id);

        if (empty($faqTheme)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faq-themes.index'));
        }

        if($faqTheme->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('faq-themes.index'));
    }
}
