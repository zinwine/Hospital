@extends('project.master')

@section('title','Career Details')
@section('content')
    <style>



    </style>
    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">{{__('main.career')}}</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>
    <div class="container carr_con">
        <div class="row career_detail">
            <div class="col-md-3 well" style="text-align: center;">

                <table class="ca table">
                    <tr>
                        <td><i class="fa fa-calendar"></i></td>
                        <td> <h4>Dated Post</h4>
                            <p>{{$career->latest_date}}</p></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td><h4>Location</h4>
                            <p>In {{$career->location}}</p></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-user"></i></td>
                        <td><h4>Job Title</h4>
                            <p>{{$career->position}}</p></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-money "></i></td>
                        <td><h4>Salary</h4>
                            <p>$ {{$career->salary}}</p></td>
                    </tr>
                </table>
                <a href="#"><button class="btn detail_btn" data-toggle="modal" data-target="#myModalHorizontal">Apply now</button></a>
            </div>

            <div class="col-md-8 car_right">
                <h2>{{$career->position}}</h2>
                <hr style="background: #D5DEE3;height: 1px">
                <p>{{$career->description}}</p>
                <!-- <div class="row"> -->
                <h4 style="margin-top: 30px">Requirment</h4>
                <ul type="circle">
                    <li>{{$career->requirment}} </li>
                </ul>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- ******************** CAREER LIGHT BOX START ********************** -->
    <!-- Modal -->
    <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">

                        <span class="sr-only">Close</span>
                    </button>
                    <h2 class="modal-title" style="text-align: center;" id="myModalLabel">
                        Career Form
                    </h2>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row">
                        <form action="">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                                </div>

                                <h4>Gender</h4>
                                <select name="form_gender" class="form-control required" aria-required="true" style="margin-bottom: 30px;">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>

                                <h4>Job Post</h4>
                                <select name="form_post" class="form-control required valid" aria-required="true" aria-invalid="false" style="margin-bottom: 20px;">
                                    <option value="Finance Manager">Finance Manager</option>
                                    <option value="Area Manager">Area Manager</option>
                                    <option value="Country Manager">Country Manager</option>
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <h4 style="font-weight: bold; font-size: 15px;">Message</h4>
                                <textarea name="" id="" cols="30" rows="5" placeholder="" class="form-control" style="outline: none; resize: none; margin-bottom: 30px;"></textarea>

                                <h4 style="font-weight: bold; font-size: 15px;">C/V Upload</h4>
                                <input name="" class="file" type="file" multiple style="margin-bottom: 30px;">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <div class="row" style="margin: 10px 0;">
                        <div class="col-xs-6">
                            <button class="btn btn-info pull-left" type="submit" style="width: 100%; display: block;">Apply Now</button>
                        </div>
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="width: 100%; display: block;">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ******************** CAREER LIGHT BOX END ********************** -->

    @endsection