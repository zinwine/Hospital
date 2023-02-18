@extends('project.master')

@section('title','New Post')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">{{__('main.news')}}</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>
    <div class="container">



        <div class="row single_news">

            <div class="col-sm-10 col-sm-offset-1 well">

                @if(strpos($news->image, "https://") !== false)
                <img class="news_img img-responsive" src={{$news->image}} alt="image" style=""/>
                @else
                <img class="news_img img-responsive" src={{asset('backend/assets/images/upload/'. $news->image)}} alt="image" style=""/>
                @endif

                <div class="caption">

                    <h2>{{$news->title}}</h2>
                    <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $news->body }}

</p>
                </div>

            </div>

        </div>


        <div class="row single_news_comments">

            <!-- Comment -->

            <div class="col-md-10 col-md-offset-1 well">

                <h3>Comments</h3>

                <hr>

                <!-- Comment Post -->

                <div class="col-md-1">
                    <i class= "i" ></i>
                </div>
                <div class="col-md-11">
                    <h4>Nay Myo Aung</h4>
                    <span>April 7th , 2017</span>
                    <p class="text-justify" style="padding-top:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.
                        tempor incidid.</p>
                </div>

                <hr class="hr">

                <!-- Comment Post -->

                <div class="col-md-1">
                    <i class= "i"></i>
                </div>
                <div class="col-md-11">
                    <h4>Nay Myo Aung</h4>
                    <span>April 7th , 2017</span>
                    <p class="text-justify" style="padding-top:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.
                        tempor incidid.</p>
                </div>

                <hr class="hr">

                <!-- Comment Post -->

                <div class="col-md-1">
                    <i class= "i"></i>
                </div>
                <div class="col-md-11">
                    <h4>Nay Myo Aung</h4>
                    <span>April 7th , 2017</span>
                    <p class="text-justify" style="padding-top:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.
                        tempor incidid.</p>
                </div>

                <hr class="hr">

            </div>

            <!-- Leave A Comment -->

            <div class="col-md-10 col-md-offset-1 well">

                <h3>Leave A Comments</h3>

                <hr>

                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="email" class="form-control" id="name" placeholder="John Doe" name="Jon">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="johndoe@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website" placeholder="72coderhospital.org">
                    </div>

                    <div class="form-group">

                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>

                    </div>

                    <button type="submit" class="submit btn pull-right">Post Your Comment</button>
                </form>

                <div class="clearfix"></div>

            </div>

        </div>


    </div>


@endsection