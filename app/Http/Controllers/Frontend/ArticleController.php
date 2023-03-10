<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(6);
        return view('project.articles', compact('articles'));
    }

    public function article_detail($id)
    {
        $article = Article::find($id);
        $articles = Article::latest()->orderBy('id', 'desc')->get();
        return view('project.single_article', compact('article', 'articles'));
    }
}
