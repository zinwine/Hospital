<?php

namespace App\Http\Controllers\Backend;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->orderBy('id', 'desce')->get();
        return view('backend.pages/news/all_news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.news.add_news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $img = $request->file('news_img');
        return $img;
        if(strpos($img, "https://") !== false){
            $filename = $img;
        }else{
            $filename = $img->getClientOriginalName();
            $img->move(public_path() . '/backend/assets/images/upload/', $filename);
        }

        News::create([
            'title' => $request->title,
            'author' => $request->author,
            'image' => $filename,
            'body' => $request->news,
        ]);
        return redirect("/admin/news")->with('status', "Successfully Created News");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('backend.pages.news.edit_news', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::where('id', $id)->first();

        $img = $request->file('news_img');
        if(strpos($img, "https://") !== false){
            $filename = $img;
        }else{
            $filename = $img->getClientOriginalName();
        }

        if($news->image != $filename){
            $img->move(public_path() . '/backend/assets/images/upload/', $filename);
        }
        $news->title = $request->title;
        $news->author = $request->author;
        $news->image = $filename;
        $news->body = $request->news;
        $news->update(); 

        return redirect("/admin/news")->with('status', "Successfully Updated News");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::destroy($id);
        return redirect("/admin/news")->with('status', "Successfully Deleted News");
    }
}
