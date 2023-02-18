@extends('project.master')

@section('title','Hospital Home')
@section('content')


    <div class="container-fluid">

        <div class="first row" style="margin-top:-20px;">

            <div class="find col-md-offset-2 col-md-10">
                <a href="{{url('/find_doctor')}}" ><span class="wow fadeInDown"><i class="fa fa-user-md fa-4x" aria-hidden="true"></i><b> Find
                    Doctor</b></span> </a>
                <ul class="social list-inline wow fadeInUp">
                    <li><a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope-square fa-3x" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
                </ul>
            </div>


        </div>
        <div class="heading_one row">
            <div class="heading img-rounded col-sm-4 col-sm-offset-4
         col-xs-offset-1 col-xs-11 col-md-offset-2 col-md-2 wow fadeInLeft" data-wow-delay="0.2s" style="border:2px solid #00838f; margin-top:50px;margin-bottom:30px"><a href="{{url('/services')}}"><i class="fa flaticon-medical-ambulance14 fa-4x" aria-hidden="true"></i><h4>Emergency</h4></a>
            </div>

            <div class="heading img-rounded col-sm-4 col-sm-offset-4
         col-xs-offset-1 col-xs-11 col-md-offset-1 col-md-2 wow fadeInLeft" data-wow-delay="0.4s" style="border:2px solid #00838f;"><a href="{{url('/schedules')}}"><i class="fa flaticon-medical-medical50 fa-4x" aria-hidden="true"></i><h4>Schedules</h4></a>
            </div>

            <div class="heading img-rounded col-sm-4 col-sm-offset-4
         col-xs-offset-1 col-xs-11 col-md-offset-1 col-md-2 wow fadeInLeft" data-wow-delay="0.6s" style="border:2px solid #00838f;"><a href="{{url('/department')}}"><i class="fa flaticon-medical-hospital17 fa-4x" aria-hidden="true"></i><h4>Department</h4></a>
            </div>

        </div>
    </div>
    </div>

    <!-- ******************** ARTICAL START ********************** -->
    <!--<div class="container-fluid" >-->
    <div class="container-fluid article_container">
        <div class="row">
            <div class="heading_1 col-md-12" style="text-align: center;margin-top:80px; margin-bottom: -10px">
                <h2 class="doctor_h3 wow pulse" style="margin-top: -20px; margin-bottom:1px;">{{ __('main.arc') }}</h2>
                <img src="{{asset('project/img/cc/ki.png')}}" alt="">
            </div>
        </div>

        <div class="row article_content">
            <div class="col-md-6 col-md-push-6 article_right" >
                @if(strpos($article->image, "https://") !== false)
                <img class="news_img img-responsive" src={{$article->image}} alt="image" style="width: 100%;"/>
                @else
                <img class="news_img img-responsive" src={{asset('backend/assets/images/upload/'. $article->image)}} alt="image" style="width: 100%;"/>
                @endif
            </div>
            
            <div class="col-md-6 col-md-pull-6 article_left">
                <h4 style="padding-bottom:20px;">{{$article->title}}</h4>

                <i class="fa fa-user">&nbsp;&nbsp;Dr. {{$article->author}}&nbsp;&nbsp;</i>
                <i class="fa fa-calendar">&nbsp;&nbsp;{{$article->created_at}}</i>

                <p style="margin-right: 25px; color:#333; padding-top:20px;">{{$article->body}}</p>
                <a href="{{url('/article_detail/' . $article->id)}}" class="pull-right" style="margin-right: 25px;color:#00838f">Read More <i class="fa fa-angle-double-right"></i></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--</div>-->
    <!-- ******************** ARTICAL END ********************** -->


    <!-- ******************** RECENT NEWS START ********************** -->
    <section class="full_width recent_section">
        <div class="container">
            <div class="row">
                <div class="heading_1 col-md-12" style="text-align: center;margin-top:0px;margin-bottom: 70px">
                    <h2 class="doctor_h3 wow pulse" style="margin-bottom:1px; padding-top: 30px; ">{{ __('main.news') }}</h2>
                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                </div>
            </div>
            <div class="row ">
                             
                @foreach($choose_news as $news)

                <div class="col-md-6 news_post">

                    <div class="row left_news">
                        <div class="col-md-6" style="padding:0;">
                            @if(strpos($news->image, "https://") !== false)
                            <img class="news_img img-responsive" src={{$news->image}} alt="image" style="width: 100%;"/>
                            @else
                            <img class="news_img img-responsive" src={{asset('backend/assets/images/upload/'. $news->image)}} alt="image" style="width: 100%;"/>
                            @endif
                            <p class="news_z-index">
                                <i class="fa fa-user"></i> {{ $news->author }} <i class="fa fa-calendar"></i> {{ $news->created_at}}</p>
                        </div>

                        <div class="col-md-6 ">
                            <h6 class="news_h4" style="word-wrap: break-word;">{{ $news->title}}</h6>
                            <p class="news_p">{{ substr($news->body, 0, 400) }}</p>
                            <a href="{{url('/news_detail/' . $news->id )}}" class="pull-right">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-6">

                    <div class="row left_news">
                        <div class="col-md-6" style="padding:0;">
                            <img src="{{asset('project/img/news/baby.png')}}" alt="" class="news_img img-responsive">

                            <p class="news_z-index">
                                <i class="fa fa-user"></i> U Aung
                                <i class="fa fa-calendar"></i> 1.1.2017 3:00PM</p>
                        </div>

                        <div class="col-md-6">
                            <h4 class="news_h4">ဖခင္ေတြက ကေလးငယ္ကို ပံုျပင္ဖတ္ျပတာဟာ</h4>
                            <p class="news_p">ဖခင္ေတြအေနနဲ႔ သူတို႔ရဲ႕ကေလး ငယ္ေတြကိုညဘက္မွာအိပ္ယာ၀င္ ပံုျပင္ေတြေျပာျပျခင္းဟာ ကေလးငယ္ေတြကို ဘာသာစကားပိုင္းမွာ ထူးခၽြန္လာေစႏိုင္တယ္လို႔သုေတသန တစ္ခုက ေဖာ္ျပလိုက္ပါတယ္။အေမ ရိကန္ ျပည္ေထာင္စုမွာရွိတဲ့  </p>
                            <a href="{{url('/single_new')}}" class="pull-right">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <!-- ******************** RECENT NEWS END ********************** -->


    <!-- ******************** DOCTOR PROFILE START ********************** -->
    <section class="full_width doctor_section">
        <div class="container">
            <div class="row">
                <div class="heading_one col-md-12" style="text-align: center;margin-top:30px;margin-bottom: 70px">
                    <h2 class="doctor_h3 wow pulse">Doctor(Specialist)</h2>
                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme">

                            @foreach($doctors as $doc)

                            <div class="item active">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{$doc->photo}}" alt="..." class="doctor_img img-responsive">

                                        <ul class="list-inline">
                                            <li><a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a></li>
                                            <li><a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a></li>
                                            <li><a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a></li>
                                            <li><a href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a></li>

                                        </ul>

                                        <div class="caption">
                                            <h4 class="doctor_h4">{{$doc->name}}</h4>
                                            <p class="doctor_p">{{$doc->bechelor}}</p>
                                            <a href="{{url('/doctor_profile/'.$doc->id)}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>

                </div>
            </section>
        </div> <br/> <br/>
    </section>
    <!-- ******************** DOCTOR PROFILE END ********************** -->

    @endsection