<?php

namespace App\Http\Controllers\Frontend;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    
    public function news_detail($id)
    {
        $news = News::find($id);
        return view('project.single_new', compact('news'));
    }
}
