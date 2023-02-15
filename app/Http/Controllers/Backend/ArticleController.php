<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('backend.pages.article.all_article', compact('articles'));
    }
}
