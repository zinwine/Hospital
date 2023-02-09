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
                <h2 class="doctor_h3 wow pulse" style="margin-top: -20px; margin-bottom:1px;">Health articles</h2>
                <img src="{{asset('project/img/cc/ki.png')}}" alt="">
            </div>
        </div>

        <div class="row article_content">
            <div class="col-md-6 col-md-push-6 article_right" >
                <img src="{{asset('project/img/article/heart.jpg')}}" class="img-responsive" style="width:100%;" alt="" >

            </div>
            

            <div class="col-md-6 col-md-pull-6 article_left">
                <h4 style="padding-bottom:20px;">ရုတ္တရက္  Heart Attack ရခဲ့လ်ွင္</h4>

                <i class="fa fa-user">&nbsp;&nbsp;Dr. Aung Thu&nbsp;&nbsp;</i>
                <i class="fa fa-calendar">&nbsp;&nbsp;29-April 2017</i>

                <p style="margin-right: 25px; color:#333; padding-top:20px;">အသက္ၾကီး လာသည္ႏွင့္ အမွ် ႏွလံုးေသြးေၾကာ က်ဥ္းေရာဂါ အနည္းႏွင့္ အမ်ား ျဖစ္ပြားလာတတ္ပါသည္။ တခ်ိဳ႕ ႏွလံုးေသြးေၾကာက်ဥ္း လူနာမ်ားသည္ ႏွလံုးေသြးေၾကာ က်ဥ္းေသာ ေရာဂါလကၡဏာ ပင္ မခံစားရဘဲ ရုတ္တရက္ ႏွလံုးေသြးေၾကာပိတ္ ျပီး Heart Attack ရတတ္ပါသည္။ ထုိ႔ အျပင္ ရုတ္တရက္ ရင္ဘတ္ေအာင့္လွ်င္ အျဖစ္ႏုိင္ဆံုးေသာ အျဖစ္အမ်ားဆံုးေသာ အေၾကာင္း အရာမွာ ႏွလံုးေသြးေၾကာပိတ္ျခင္း (Myocardial Infarct) ေၾကာင့္ ျဖစ္ပါသည္။ Heart Attack ရေသာ လူနာ၏ေရာဂါ လကၡဏာမ်ားမွာ</p>
                <a href="{{url('/single_article')}}" class="pull-right" style="margin-right: 25px;color:#00838f">Read More <i class="fa fa-angle-double-right"></i></a>
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
                    <h2 class="doctor_h3 wow pulse" style="margin-bottom:1px; padding-top: 30px; ">News</h2>
                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                </div>
            </div>
            <div class="row ">

                <!--   <h3 class="news_h3">Recent News</h3> <br/> <br/> -->

                <div class="col-md-6 news_post">

                    <div class="row left_news">
                        <div class="col-md-6" style="padding:0;">
                            <img src="{{asset('project/img/news/instance.png')}}" alt="" class="news_img img-responsive">

                            <p class="news_z-index">
                                <i class="fa fa-user"></i> Mg Kyaw <i class="fa fa-calendar"></i> 1.1.2017 1:00PM</p>
                        </div>

                        <div class="col-md-6 ">
                            <h6 class="news_h4">ေခါက္ဆြဲထုပ္ကို အႏၱရာယ္ကင္းေအာင္ </h6>
                            <p class="news_p">ေခါက္ဆြဲထုပ္ကို အမ်ားႀကီး စား ရင္ အစာမေၾကျဖစ္တတ္ပါတယ္။ ေခါက္ ဆြဲထုပ္ကို အဆင္သင့္အစာ (Junk Food) အျဖစ္ က်န္းမာေရးနဲ႔ မညီၫြတ္ တဲ့ အစာလို႔ ေဝဖန္ၾကပါတယ္။ ေခါက္ ဆြဲထုပ္တစ္ထုပ္မွာ ကာဗိုဟိုက္ဒရိတ္နဲ႔ အဆီပါဝင္မႈ မ်ားေပမယ့္ အမွ်င္ဓာတ္၊ ဗီတာမင္နဲ႔ သတၲဳဓာတ္ေတြ  </p>
                            <a href="{{url('/single_new')}}" class="pull-right">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">

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
                </div>

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

                            <div class="item active">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d1.png')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="item">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d2.jpg')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d3.jpg')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d4.jpg')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d5.png')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="item">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d6.jpg')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d7.jpg')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="col-sm-12 col-md-12">
                                    <div class="thumbnail doctor_profile">

                                        <img src="{{asset('project/img/doctor/d8.jpg')}}" alt="..." class="doctor_img img-responsive">

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
                                            <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                            <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                            <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div> <br/> <br/>
    </section>
    <!-- ******************** DOCTOR PROFILE END ********************** -->

    @endsection