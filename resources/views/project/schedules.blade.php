@extends('project.master')

@section('title','Schedules')
@section('content')

   <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Schedules</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container-fluid news_con">
        <div class="row table-responsive">

            <table class="table table-bordered schedules_table">
                <tr style="background-color: #00838f;">
                    <th><p style="width: 150px">Name</p></th>

                    <th><p style="width: 150px">Specialist</p></th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr>
                <tr>
                    <td>Dr.Aung Thu Shein</td>

                    <td>Liver</td>
                    <td><p>9:00am to 11:00am</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>   <p>3:00pm to 5:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td >Dr.Myint Myint</td>
                    <td>Dental</td>
                    <td><p>9:00am to 11:00am</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                    <td><p>1:00pm to 3:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td><p>3:00am to 5:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td >Dr.Myint Thu</td>
                    <td>General</td>
                    <td>---</td>
                    <td><p>11:00am to 1:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td><p>5:00am to 7:00am</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td >Dr.Phue Phue</td>
                    <td>Dental</td>
                    <td> <p>9:00am to 11:00am</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                    <td>  <p>1:00pm to 3:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>  <p>3:00am to 5:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>Dr.Moe Moe</td>
                    <td>General</td>
                    <td>---</td>
                    <td>  <p>11:00am to 1:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>   <p>3:00am to 5:00pm</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>

                    <td>---</td>
                    <td><p>5:00am to 7:00am</p>
                        <a href="{{url('/appointment')}}" class="btn btn-warning">Appointment</a>

                    </td>
                </tr>
            </table>
        </div>
        <!-- ******************Table Remark Start************************ -->

        <div class="row remark well">

            <h4>Remark</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quasi reiciendis, nihil, est quidem eligendi temporibus numquam officia quod distinctio! Quas quisquam ut voluptatem excepturi officiis earum blanditiis ducimus voluptate.</p>

        </div>


        <!-- *******************Table Remark end************************ -->
    </div>

    @endsection