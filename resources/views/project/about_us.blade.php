@extends('project.master')

@section('title','About Us')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">{{__('main.about')}}</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>
  
    <div class="container">



        <div class="row">
            <h2 style="padding:15px;">{{__('main.meet_us')}}</h2>
            <div class="col-md-3 col-sm-6">
                <div class="dor">
                    <img src="{{asset('project/img/doctor/dr11.jpg')}}">
                </div>
                <div class="team row">
                    <h4>Our CEO</h4>
                    <h5>U Mg Mg</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="dor">
                    <img src="{{asset('project/img/doctor/dr12.jpg')}}">
                </div>
                <div class="team row">
                    <h4>Managing Director</h4>
                    <h5>U Aung Thu</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dor">
                    <img src="{{asset('project/img/doctor/dr13.jpg')}}">
                </div>
                <div class="team row">
                    <h4>General Manager</h4>
                    <h5>U Hla Aung</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="dor">
                    <img src="{{asset('project/img/doctor/dr10.jpg')}}">
                </div>
                <div class="team row">
                    <h4>Manager</h4>
                    <h5>U Aung Mya</h5>
                </div>
            </div>

        </div>
    </div>
    <div class="container" style="padding: 50px 0px;">
        <div class="row no-gutter">
            <div class="col-md-6"><img src="{{asset('project/img/coast-plaza--hospital.jpg')}}" alt="" class="img-responsive"/></div>
            <div class="col-md-6">
                <div class="text-box box-left">
                    <h3 style="padding-bottom:20px;"><b>{{__('main.our_stories')}}</b></h3>


                    <p style="font-size: 16px; font-family: 'myanmar3';">
                    ???????????????????????????????????? ?????????????????????????????????????????? ????????????????????? ?????????????????? ?????????????????????????????????????????? ?????????????????????????????????????????????  ???????????? ????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? ?????? ?????????????????????????????? ??????????????? ????????? ?????????????????????  
                    ???????????????????????????????????? ?????????????????????????????????????????? ????????????????????????????????? ??????????????????????????????????????????????????? 
                    ?????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????? ??????????????????????????????????????? ??????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ?????????????????????????????????
                    ???????????????????????????????????? ????????????????????????????????????????????? ???????????????????????????????????? ?????????????????????????????? ?????? ????????? ????????????????????? ????????????????????????????????????????????? ???.??? ????????????????????? ????????????????????????????????????????????????????????????
 


</p>
                    <br/>
                    <p style="font-size: 16px; font-family: 'thin';">Our hospital is a public company traded on the Thai stock exchange. It has been featured by CBS's 60 Minutes, NBC???s Today Show, Time, Newsweek, and other international press as a leader in medical tourism.</p>
                </div>
            </div>
            <!-- <div class="clearfix"></div> -->


        </div>
        <hr style="background: #aaa;height: 1px">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6">
                <div class="text-box box-right"  >
                    <h3 style="padding-bottom:20px;"><b>{{__('main.our_miss')}}</b></h3>


                    <p style="font-size: 16px; font-family: 'thin';">??????????????????????????????????????????????????????????????????????????? ????????????????????????????????? ?????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????? ????????????????????????????????? ??????????????? ?????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????? ?????????????????? ???????????????????????????????????????????????????  ??????????????????????????????????????? ????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ???????????????????????? ??????????????????????????? ??????????????????????????????????????? ????????????????????????????????????????????? ????????????????????????????????????????????? ??????????????? ????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????</p>
                    <br/>
                     
                </div>
            </div>
            <div class="col-md-6"><img src="{{asset('project/img/download1.jpg')}}" alt="" class="img-responsive"/></div>
        </div>
    </div>

    @endsection