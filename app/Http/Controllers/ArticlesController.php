<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::latest('published_at')->get();

        return view('articles.index',compact('articles'));
    }

    public function show($id){
        $article=Article::findOrFail($id);

        return view('articles.show',compact('article'));
    }

    public function create(){
        
        return view('articles.create');
        
    }

    /**
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateArticleRequest $request){

        Article::create($request->all());

        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update($id, ArticleRequest $request){

        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
    
}
