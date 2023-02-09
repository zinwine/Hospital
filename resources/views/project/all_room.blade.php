@extends('project.master')

@section('title','All Room')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">VIP Rooms</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">
        <div class="col-md-3 col-sm-6 box_rev" style="position:relative;">
  <span class="reserve"  >
      <span class="reserve_text">Reversed</span>
       </span>
            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href=""><h3>Book Now</h3></a>
                </div>


            </div>

        </div>
        <div class="col-md-3 col-sm-6 box">
            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href="{{url('/booking')}}"><h3>Book Now</h3></a>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6 box">
            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href="{{url('/booking')}}"><h3>Book Now</h3></a>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6 box">
            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href="{{url('/booking')}}"><h3>Book Now</h3></a>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6 box">

            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href="{{url('/booking')}}"><h3>Book Now</h3></a>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6 box">

            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href="{{url('/booking')}}"><h3>Book Now</h3></a>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6 box">

            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href="{{url('/booking')}}"><h3>Book Now</h3></a>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6 box">

            <div class="box_img">
                <img src="{{asset('project/img/room/2.jpg')}}">
            </div>
            <div class="room_info">
                <div style="padding-top:8px">
                    <h4>VIP Room 1 </h4>
                    <h5 class="pull-right" >15000 MMK/day</h5>
                    <a href="{{url('/booking')}}"><h3>Book Now</h3></a>
                </div>
            </div>

        </div>


    </div>
    <div class="container">
        <div class="row well">
            <div style="margin:15px;">
                <h3>Remark</h3>
                <p>သတ္မွတ္ထားေသာ လူနာဧည့္ေတြ႕ခ်ိန္ ။ ။ နံနက္ ၆ နာရီမွ ည ၁၀ နာရီထိ။</p>
                <p>တစ္ေယာက္အိပ္ခန္းရွိလူနာမ်ားအတြက္ အခ်ိန္မေရြးဧည့္သည္လာခြင့္ျပဳထားပါသည္။
</p>
            </div>
        </div>
    </div>

    @endsection