@extends('project.master')

@section('title','Find Doctor')
@section('content')

    <style>
        /*find_doctor*/

        .find_doc{
            background: #E9EBF7;
            text-align: center;
            padding: 20px 0px;

            margin-top: 10px;

        }
        .doc_table{
            margin-top:20px;
        }
        .doc_table th{
            background: #00838f;
            color:#fff;
            text-align: center;
        }
        .doc_table td{
            color:#00838f;
        }
        .aa{
            margin-top:20px;
        }
        /*end find doctor*/
    </style>

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Find a doctors</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">

        <div class="row aa">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">

                    <select class="col-md-4 col-sm-4 col-xs-4" style="height:32px; border-radius: 5px" name="" id="">
                        <option>Child</option>
                        <option>bone</option>
                        <option>Child</option>
                        <option>Child</option>
                    </select>


                    <div class="input-group col-md-8 col-sm-8 col-xs-8">




                        <input type="text" class="form-control" name="x" placeholder="Find Doctor">
                        <span class="input-group-btn">
    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 find_doc well" >
                <img src="{{asset('project/img/download (3).jpg')}}" alt="">
                <h2>Dr.Su Su</h2>
                <p>M.B.B.S.M  Med.Sc ( Surgery ). M.R.C.S ( Edin)</p>
                <a style="background: #00838f;" class="btn btn-warning" href="{{url('/doctor_profile')}}">
                    View Profile
                </a>
                <!--  <h3 style="background:#00838f;width:200px;line-height: 50px;color:#fff;">Timetable</h3> -->
                <div class="table-responsive doc_table">
                    <table class="table table-bordered">
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Web</th>
                            <th>Thus</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>
                                8:00 to 10:00 <br>
                                <a href="{{url('/appointment')}}"><button class="btn btn-warning">Appointment</button></a>
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                2:00 to 4:00 <br>
                                <a href="{{url('/appointment')}}"><button class="btn btn-warning">Appointment</button></a>
                            </td>
                            <td>-</td>
                            <td>-</td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>

    @endsection