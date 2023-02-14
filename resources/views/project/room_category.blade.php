@extends('project.master')
@section('title','Room Category')
@section('content')

   <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">All Room Types</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container room_type">
    <div class="row">
        <div class="col-md-4 col-sm-6 room_detail"  style="border-right:1px             solid #ccc;">
            <h3>VIP Room</h3>

            <img src="{{asset('project/img/room/7.jpg')}}">  <br>

            <a href="{{url('/vip_all')}}" class="btn btn_submit                    pull-right">See all room</a>
                 <div class="clearfix"></div>
            <br>
        </div>
        <div class="col-md-8 col-sm-6 room_detail">
            <h3>Room Details</h3>
            <div role="tabpanel" style="transition:3s;">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Room Info</a></li>
                    <li role="presentation"><a href="#faci" aria-controls="profile" role="tab" data-toggle="tab">Facilities and Rule</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="info" style="margin:17px 7px;">
                        <h4><b>Price: </b>15000 MMK / day</h4>
                        <h4><b>Area: </b>100 square ft</h4>
                        <p style="font-size: 16px; font-family: 'thin'; margin-top:20px;">As part of Customer Services the team is responsible for the centrally bookable teaching rooms at UCL. Our main purpose is to facilitate the delivery of the core academic timetable.

            The office ensures that the bookings for these rooms are coordinated such that UCL is able to optimise its use of space and that the centrally controlled rooms are fit for purpose. The team is responsible for liaising with colleagues across Digital Education, Catering, Facilities and Workplace Services, Security; and the Fabric and Projects teams to maintain and develop teaching stock.</p>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade in" id="faci">
                        <ul>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                ExamplesElectronically adjustable bed</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Personal telephone for local and international calls</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Individually Television</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Controlled air conditioning</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Personal medication cabinet</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Complementry premiun bathroom</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Guest couch</li>
                        </ul>
                    </div>
                     

                </div>

            </div>
        </div>
        </div>

    </div>
 

    <div class="container room_type">
    <div class="row"> 
        <div class="col-md-4 col-sm-6 room_detail"  style="border-right:1px solid #ccc;">
            <h3>Normal Room</h3>
            <img src="{{asset('project/img/room.jpg')}}">

            <br>

            <a href="{{url('/normal_all')}}" class="btn btn_submit pull-right">See all room</a>
             <div class="clearfix"></div>

            <br>

        </div>
        <div class="col-md-8 col-sm-6 room_detail">
            <h3>Room Details</h3>
            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#info1" aria-controls="home" role="tab" data-toggle="tab">Room Info</a></li>
                    <li role="presentation"><a href="#faci1" aria-controls="profile" role="tab" data-toggle="tab">Facilities and Rule</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="info1" style="margin:7px;">
                        <h4><b>Price: </b>10000 MMK / day</h4>
                        <h4><b>Area: </b>100 square ft</h4>
                        <p style="font-size: 16px; font-family: 'thin'; margin-top:20px;">As part of Customer Services the team is responsible for the centrally bookable teaching rooms at UCL. Our main purpose is to facilitate the delivery of the core academic timetable.

The office ensures that the bookings for these rooms are coordinated such that UCL is able to optimise its use of space and that the centrally controlled rooms are fit for purpose. The team is responsible for liaising with colleagues across Digital Education, Catering, Facilities and Workplace Services, Security; and the Fabric and Projects teams to maintain and develop teaching stock.</p>
 

                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade in" id="faci1">
                        <ul>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                ExamplesElectronically adjustable bed</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Personal telephone for local and international calls</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Individually Television</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Controlled air conditioning</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Personal medication cabinet</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Complementry premiun bathroom</li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Guest couch</li>
                        </ul>
                    </div>
                     

                </div>

            </div>
        </div>
</div>
 

    </div>

    @endsection