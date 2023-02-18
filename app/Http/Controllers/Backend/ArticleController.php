<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->orderBy('id', 'desc')->get();
        return view('backend.pages.article.all_article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.article.new_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $img = $request->file('article_img');
        $filename = $img->getClientOriginalName();
        $img->move(public_path() . '/backend/assets/images/upload/', $filename);

        Article::create([
            'title' => $request->title,
            'author' => $request->author,
            'image' => $filename,
            'body' => $request->article,
        ]);
        return redirect("/admin/articles")->with('status', "Successfully Created New Article");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('backend.pages.article.edit_article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::where('id', $id)->first();

        $img = $request->file('article_img');
        $filename = $img->getClientOriginalName();

        if($article->image != $filename){
            $img->move(public_path() . '/backend/assets/images/upload/', $filename);
        }
        $article->title = $request->title;
        $article->author = $request->author;
        $article->image = $filename;
        $article->body = $request->article;
        $article->update();

        return redirect("/admin/articles")->with('status', "Successfully Updated Article");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::destroy($id);
        return redirect("/admin/articles")->with('status', "Successfully Deleted Article");
    }
}
