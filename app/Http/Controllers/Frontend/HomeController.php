<?php

namespace App\Http\Controllers\Frontend;

use App\News;
use App\Doctor;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $article = Article::latest('id')->first();
        $news = News::latest()->orderBy('id', 'desc')->get();
        $choose_news = [];
        $i = 0;
        foreach($news as $new){
            if($i < 2){
                $i++;
                array_push($choose_news, $new);
            }
        }
        return view('project.home', compact('doctors', 'article', 'choose_news'));
    }
    public function lang($lang){
        App::setLocale($lang);
        // return App::getLocale();
        return redirect()->back();
    }
}
