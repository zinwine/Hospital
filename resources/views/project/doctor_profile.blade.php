@extends('project.master')

@section('title','Doctor Profile')
@section('content')

    <style>

        /*doctor_profile*/
        .doc{
            /*border:2px solid red;*/
            background: #f6f6f6;

            /*margin-top: 30px;*/
        }
        .left{
            /*background: #000;*/
        }
        .right{
            padding-top: 30px;
            font-size:1.3em;
        }
        .heading_1{
            text-align: center;
            background:#00838f;
            height:150px;
            color: #fff;
        }
        .heading_1 e{
            color:#fff;
            /*line-height: 50px;*/
        }
        .right table td{
            font-size:17px;
        }
        .right p{
            text-align: justify;
        }
        .doctor{
            width:100% ;
            box-shadow: 2px 2px 8px grey,
            -2px -2px 8px grey;
            margin:20px 0px;
        }

        .time{
            text-align: center;
            margin-top: 20px;
            /*background: #ffdfb2;*/
        }
        .table{
            margin-top:20px;
        }
        .table th{
            text-align: center;
            background: #00838f;
            color:#fff;
        }
        .time h3{
            background:#00838f;
            border-radius: 40px 40px 0px 0px;
            width:200px;
            color:#fff;
            text-align: center;
            line-height: 50px;
        }
        .table td{
            color:#00838f;
            font-weight: bold;
            font-size: 1.2em;
        }
        @media(max-width:786px){
            .heading_1 h2{
                font-size:25px;

            }
        }
        @media(max-width:992px){
            .heading_1 h2{
                font-size:25px;
                padding-top:10px;
            }
        }
        /*end doctor_profile*/

    </style>

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Doctor's profile</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container-fluid">


        <div class="doc row">
            <div class="left col-md-4">
                <img src="{{$doctor->photo}}" class="doctor img-responsive img-rounded  well" alt="">

            </div>
            <div class="right col-md-8 table-responsive">
                <table class="table">

                    <tr>
                        <td>Name</td>
                        <td>{{$doctor->name}}</td>

                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>{{$doctor->age}}</td>
                    </tr>
                    <tr>
                        <td>Bachelor </td>

                        <td>{{$doctor->bechelor}}</td>

                    </tr>

                    <tr>
                        <td>Department </td>

                        <td>{{$doctor->department}}</td>
                    </tr>
                    <tr>
                        <td>Experience </td>
                        <td><li>{{$doctor->experience}}</li>
</td>
                    </tr>
                </table>




            </div>
        </div>
        <div class="time row">
            <div class="col-md-12 table-responsive">
                <h3>Timetable</h3>
                <!-- <p>
                  <i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i> Sunday : 2pm to 4pm.
                </p>
                <p>
                  <i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i> Monday : 10pm to 12pm.
                </p> -->
                <table class="table table-bordered">
                    <tr>
                        <th>mon</th>
                        <th>tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        <th>Sun</th>
                    </tr>

                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            8:00 to 10:00 <br>
                            <a href="{{url('/appointment')}}"><button class="btn btn-warning">Make appointment</button></a>
                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            2:00 to 4:00
                            <br>
                            <a href="{{url('/appointment')}}"><button class="btn btn-warning">Make appointment</button></a>
                        </td>
                        <td>-</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    @endsection