@extends('project.master')

@section('title','Payment')
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
                <h1 style="line-height:100px;">Make a Payment</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">
        <div class="payment">
            <div class="col-md-6 well">

                <h4 style="color: #00838F;"><b>Pay By Credit Card</b></h4>

                <hr>

                <div class="col-md-2"><img src="{{asset('project/img/Visa-icon.png')}}" width="50px" height="45px" alt=""></div>
                <div class="col-md-2"><img src="{{asset('project/img/Visa-icon.png')}}" width="50px" height="45px" alt=""></div>
                <div class="col-md-2"><img width="50px" height="30px" src="{{asset('project/img/download.png')}}" style = "border: 1px solid #9EABDA; margin-top: 8px; border-radius: 5px;" width="100%" alt=""></div>

                <br>
                <br>
                <br>

                <form>
                    <div class="form-group">
                        <label for="crad_no">Card Number</label>
                        <input type="text" class="form-control" name="card_no" id="card_no" placeholder="Card Number">
                    </div>
                    <div class="form-group">
                        <label for="security_code">Security Code</label>
                        <input type="text" class="form-control" id="security_code" placeholder="Security Code" name="security_code">
                    </div>
                    <!--            <div class="form-group">-->
                    <!--                <label for="exp_date">Expired Date</label>-->
                    <!--                <input type="date" name="exp_date" class="form-control" id="exp_date">-->
                    <!--            </div>-->
                    <div class="form-group">
                        <label for="checkin">Expired Date</label>
                        <input name="start_date" class="form-control" id="start_date" type="date" placeholder="yyyy/mm/dd" required/>
                    </div>
                    <div class="form-group">
                        <label for="card_holder_name">Card Holder Name</label>
                        <input type="text" class="form-control" id="card_holder_name" name="card_holder_name" placeholder="John Doe">
                    </div>

                    <button type="submit" class="btn-block btn" style="background: #00838F; color: #fff;">Make Payment</button>
                </form>

                <div class="clearfix"></div>

            </div>

            <div class="col-md-5 well" style="margin-left: 15px;">

                <h4 style="color: #00838F;"><b>Your Details</b></h4>

                <hr>


                <!--<blockquote>-->

                <ul class="list-group" style="font-size: 14px;">
                    <li class="list-group-item"><b>Your Name-</b>John Doe</li>
                    <li class="list-group-item"><b>Email-</b>johndoe@gmail.com</li>
                    <li class="list-group-item"><b>Phone-</b>09799683531</li>
                    <li class="list-group-item"><b>Total Amount-</b>$500</li>
                    <li class="list-group-item"><b>Payment Amount-</b>500000 MMK</li>
                </ul>

                <!--</blockquote>-->

            </div>
        </div>
    </div>

    @endsection