@extends('project.master')

@section('title','Articles')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">{{__('main.arc')}}</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">


        <div class="row article_row" >
            @foreach($articles as $arc)
            <div class="col-sm-6">
                <div class="thumbnail">
                    @if(strpos($arc->image, "https://") !== false)
                    <img class="news_img img-responsive img" src={{$arc->image}} alt="image" style=""/>
                    @else
                    <img class="news_img img-responsive img" src={{asset('backend/assets/images/upload/'. $arc->image)}} alt="image" style=""/>
                    @endif

                    <div class="caption">

                        <h4 class="hh">{{$arc->title}}</h4>
                        <div class="article_date">

                            <i class="fa fa-user"></i>&nbsp;&nbsp;{{$arc->author}}
                            &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$arc->created_at}}

                        </div>
                        <p class="">{{substr($arc->body, 0, 250)}} ...</p>
                        <a href="{{url('/article_detail/' . $arc->id)}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa
                    fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>


                    </div>

                </div>

            </div>
            @endforeach
        </div>

        <nav class="pagination pull-right">
            {{$articles->links()}}
        </nav>


    </div>

    @endsection