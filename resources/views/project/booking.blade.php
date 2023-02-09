@extends('project.master')

@section('title','Booking')
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
                $('#end_date').datepicker({
                    dateFormat: 'yy-mm-dd'
                });
            })
        }
    </script>

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Booking</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container" style="padding:5px;">
        <div class="col-md-4 well"s>
            <h4 style="color: #00838f;"><b>Make A Booking Now</b></h4>
            <hr>
            <form action="{{url('/payment')}}" method="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@gmail.com">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Please enter Phone No.">
                </div>
                <div class="form-group">
                    <label for="checkin">Check In</label>
                    <input name="start_date" class="form-control" id="start_date" type="date" placeholder="yyyy/mm/dd" required/>
                </div>
                <div class="form-group">
                    <label for="checkout">Check Out</label>
                    <input name="end_date" class="form-control" id="end_date" type="date" placeholder="yyyy/mm/dd" required/>
                </div>

                <a href="{{url('/payment')}}">
                    <button type="submit" class="btn pull-right btn-block" style="background: #00838f; color: #fff;">Book Now</button>
                </a>
            </form>

            <div class="clearfix"></div>
        </div>

        <div class="col-md-7 well" style="margin-left: 15px;">
            <h4 style="color: #00838F;"><b>Booking Condition And Rule</b></h4>
            <hr>
            <!--<blockquote>-->
            <ul class="list-group" style="font-size: 14px;">
                <li class="list-group-item"><b>Cancellation-</b>You can cancel free of charge untail 5 day before arrival. You'll be charged the first night if you cancel within 5 day before arrival.</li>
                <li class="list-group-item"><b>Prepayment-</b>You must pay 40% of first night when you booking.</li>
                <li class="list-group-item"><b>Tex and Service Charges-</b>13% of tex is excluded. A property service charge is not applicable.</li>
                <li class="list-group-item"><b>Children and Extra beds-</b><br>-Up to two children under 18 years stay free of charge when using existing beds.
                    <br>
                    -Any additional older children or adults stay free of charge when using existing beds.
                    <br>
                    -One older child or adult is charge USD 10 per night in an extra bed.
                    <br>
                    -One child under 2 year stay free of charge in a crib.
                    <br>
                    -Maximum number of extra beds/cribs in a room is 1.
                </li>
                <li class="list-group-item"><b>How to Cancel-</b>You can use the link in the confirmation email to cancel your booking.</li>
            </ul>

            <!--</blockquote>-->



        </div>

    </div>

    @endsection