<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
//use App\Http\Controllers\AppBaseController;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the Article.
     */
    public function index(Request $request)
    {
        return view('articles.index');
    }

    /**
     * Show the form for creating a new Article.
     */
    public function create()
    {
        $article = new Article();
        $article->loadDefaultValues();
        return view('articles.create', compact('article'));
    }

    /**
     * Store a newly created Article in storage.
     */
    public function store(CreateArticleRequest $request)
    {
        $input = $request->all();

        /** @var Article $article */
        $article = Article::create($input);
        if($article){
            flash(__('Saved successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified Article.
     */
    public function show($id)
    {
        /** @var Article $article */
        $article = Article::find($id);

        if (empty($article)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified Article.
     */
    public function edit($id)
    {
        /** @var Article $article */
        $article = Article::find($id);

        if (empty($article)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('articles.index'));
        }

        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified Article in storage.
     */
    public function update($id, UpdateArticleRequest $request)
    {
        /** @var Article $article */
        $article = Article::find($id);

        if (empty($article)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('articles.index'));
        }

        $article->fill($request->all());
        if($article->save()){
            flash(__('Updated successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified Article from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Article $article */
        $article = Article::find($id);

        if (empty($article)) {
            flash(__('Not found'))->overlay()->danger();

            return redirect(route('articles.index'));
        }

        if($article->delete()){
            flash(__('Deleted successfully.'))->overlay()->success();
        }else{
            flash(__('Ups something went wrong'))->overlay()->danger();
        }

        return redirect(route('articles.index'));
    }
}
