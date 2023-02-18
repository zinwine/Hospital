<?php

namespace App\Http\Controllers\Frontend;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(6);
        return view('project.news', compact('news'));
    }
    
    public function news_detail($id)
    {
        $news = News::find($id);
        return view('project.single_new', compact('news'));
    }
}
