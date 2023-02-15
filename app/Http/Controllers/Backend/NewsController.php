<?php

namespace App\Http\Controllers\Backend;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $news = News::latest()->orderBy('id', 'desce')->get();
        return view('backend.pages/news/all_news', compact('news'));
    }
}
