@extends('project.master')

@section('title','Article Post')
@section('content')

    <!-- ******************** ARTICLE SINGLE PAGE START 

********************** -->
<div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Article</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container" style="margin-top:10px;">
        <div class="row col-md-8 article_1">
            <div class="well">
                <h3>{{$article->title}}</h3>
                <i class="fa fa-user">&nbsp;&nbsp;Dr. {{$article->author}}&nbsp;&nbsp;</i>
                <i class="fa fa-calendar">&nbsp;&nbsp;{{$article->created_at}}</i>
                <img src="{{$article->image}}" alt="" class="img-responsive" style="float: right; padding-left:7px;">
                <p>{{$article->body}}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="rel_article" >
                <div style="text-align:center; background:#00838f; "><h3 style="margin-top:5px; line-height:42px; color:#fff;">Related Articles</h3></div>
                <table class="table table-hover">
                    @php
                    $i = 0;
                    @endphp
                    @foreach($articles as $arc)
                    @if($arc->id != $article->id && $i < 5)
                    @php $i++;  @endphp
                    <tr class="success">
                        <td><a href="{{url('article_detail/' . $arc->id)}}">
                            <img src="{{$arc->image}}" style="width: 100px;height: 100px"></a>
                        </td>
                        <td>
                            <a href="{{url('article_detail/' . $arc->id)}}"><p style="font-size:13px; line-height:50px;">{{$arc->title}}</p></a></td>

                    </tr>
                @endif
                @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- ******************** ARTICLE SINGLE PAGE END ********************** -->



    @endsection