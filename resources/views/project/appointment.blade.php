@extends('project.master')

@section('title','Make Appointment')
@section('content')

    <script type="text/javascript">
        var datefield=document.createElement("input")
        datefield.setAttribute("type", "date")
        if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
            document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
        }
    </script>

    <script>
        if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
            jQuery(function($){ //on document.ready
                $('#start_date').datepicker({
                    dateFormat: 'yy-mm-dd'
                });

            })
        }
    </script>

   <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Make an Appointment</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container well">



        <div class="col-md-2 col-md-offset-1">

            <br><img src="{{asset('project/img/dr13.jpg')}}" class="img-responsive" width="100%" alt=""><br>

        </div>
        <br>

        <div class="col-md-8">

            <ul class="list-group">
                <li class="list-group-item"><b>Doctor Name</b> - John Doe</li>
                <br>

                <li class="list-unstyled table-responsive">

                    <table class="table table-bordered app">

                        <thead>

                        <th>Day</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        <th>Sun</th>

                        </thead>

                        <tbody>

                        <tr>
                            <td>Avaliable</td>
                            <td>10:00-12:00</td>
                            <td></td>
                            <td>10:00-12:00</td>
                            <td></td>
                            <td>10:00-12:00</td>
                            <td></td>
                            <td>10:00-12:00</td>
                        </tr>

                        </tbody>

                    </table>

                </li>

                <li class="list-group-item">

                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Please enter name">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Please enter email">
                        </div>
                        <div class="form-group">
                            <label for="checkin">Date of birth</label>
                            <input name="start_date" class="form-control" id="start_date" type="date" placeholder="yyyy/mm/dd" required/>
                        </div>
                        <div class="form-group">
                            <label for="date">Gender</label>
                            <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Primary Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Please enter Phone No.">
                        </div>
                        <div class="form-group">
                            <label for="checkin">Appointment</label>
                            <input name="start_date" class="form-control" id="start_date" type="date" placeholder="yyyy/mm/dd" required/>
                        </div>

                        <button type="submit" class="btn  pull-right" style="background: #00838f;color:#fff">Appointment</button>
                    </form>

                    <div class="clearfix"></div>

                </li>

            </ul>

        </div>

    </div>


    @endsection