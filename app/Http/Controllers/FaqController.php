<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Faq;
use App\Models\FaqTheme;
use App\Models\Proposal;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the Faq.
     */
    public function index(Request $request)
    {
        return view('faqs.index');
    }

    /**
     * Show the form for creating a new Faq.
     */
    public function create()
    {
        $faq = new Faq();
        $faq->loadDefaultValues();
        return view('faqs.create', compact('faq'));
    }

    /**
     * Store a newly created Faq in storage.
     */
    public function store(CreateFaqRequest $request)
    {
        $input = $request->all();

        /** @var Faq $faq */
        $faq = Faq::create($input);
        if($faq){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('faqs.index'));
    }

    /**
     * Display the specified Faq.
     */
    public function show($id)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faqs.index'));
        }

        return view('faqs.show')->with('faq', $faq);
    }

    /**
     * Show the form for editing the specified Faq.
     */
    public function edit($id)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faqs.index'));
        }

        return view('faqs.edit')->with('faq', $faq);
    }

    /**
     * Update the specified Faq in storage.
     */
    public function update($id, UpdateFaqRequest $request)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faqs.index'));
        }

        $faq->fill($request->all());
        if($faq->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('faqs.index'));
    }

    /**
     * Remove the specified Faq from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('faqs.index'));
        }

        if($faq->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('faqs.index'));
    }


    public function FEShow()
    {
        $faqs = \App\Models\Faq::get();
        $themes = FaqTheme::get();

        return view('site.faq.index', ['faqs' => $faqs, 'themes' => $themes]);
    }
}
