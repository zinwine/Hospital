@extends('project.master')

@section('title','Career')
@section('content')

   <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">{{__('main.career')}}</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">

        <div class="row all_carr">
            @foreach ($careers as $career)
            <div class="col-md-4 col-sm-6 carrer well" style="text-align:left;">
                <i class="fa fa-user"> </i>
               <h3>{{$career->position}}</h3>
               <p class="pull-right" style="padding:30px 4px;">F/M 2 Posts</p>
                <p style="text-align:justify;">{{substr($career->description, 0, 150)}} ...</p>
                <a href="{{url('/career_detail/'. $career->id)}}"><button class="btn pull-right">{{__('main.detail')}}</button></a>
                <div class="clearfix"></div>
            </div>
            @endforeach
             
        </div>
     </div>
         

    @endsection