@extends('project.master')

@section('title','News')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">{{__('main.news')}}</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">


        <div class="row news_row" >
            @foreach($news as $new)
            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    {{-- <img src="{{$new->image}}" class="img-responsive img" alt="..."> --}}
                    @if(strpos($new->image, "https://") !== false)
                    <img class="news_img img-responsive img" src={{$new->image}} alt="image" style=""/>
                    @else
                    <img class="news_img img-responsive img" src={{asset('backend/assets/images/upload/'. $new->image)}} alt="image" style=""/>
                    @endif
                    <div class="table-bordered text-center date">

                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;{{$new->author}}
                        &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$new->created_at}}

                    </div>
                    <div class="caption news_cap">

                        <h4 >{{$new->title}}</h4>
                        <p class="text-justify">{{substr($new->body, 0, 250)}} ...</p>
                        <a href="{{url('/news_detail/' . $new->id)}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <nav class="pagination pull-right">
            {{$news->links()}}
        </nav>


    </div>

    @endsection