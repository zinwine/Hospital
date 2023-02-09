
@extends('project.master')

@section('title','Contact Us')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Contact Us</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container-fluid" style="background-color: #eef">
        <div class="container content_form">
            <div class="row">

                <div class="col-md-6">


                    <div class="">
                        <h3 class="">CONTACT US</h3>
                        <p>ေဆး႐ံု၏ ဝန္ေဆာင္မႈအတြက္ျဖစ္ေစ၊ က်န္းမာေရးေစာင့္ေရွာက္မႈအတြက္ျဖစ္ေစ တစ္စံုတစ္ရာအၾကံျပဳလိုပါက ေအာက္ပါ Email သို႔ဆက္သြယ္ႏိုင္ပါသည္။</p>
                        <br/>
                        <br/>
                        <form method="post" action="" id="smart-form">
                            <div>
                                <div class="section">
                                    <label class=""><span class=""><i class="fa fa-user"></i>&nbsp;&nbsp;Username</span></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                                    <!--  <span class="field-icon"><i class="fa fa-user"></i></span> </label> -->
                                </div>
                                <!-- end section -->


                                <div class="section">
                                    <label class=""><span class=""><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                                    <!--  <span class="field-icon"><i class="fa fa-user"></i></span> </label> -->
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class=""><span class=""><i class="fa fa-phone-square"></i></span>&nbsp;&nbsp;Telephone </label>
                                    <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="Telephone">

                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class=""> <span class=""><i class="fa fa-lightbulb-o"></i></span>&nbsp;&nbsp;Subject </label>
                                    <input type="text" name="sendersubject" id="sendersubject" class="form-control" placeholder="Enter subjec">

                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class=""><span class=""><i class="fa fa-comments"></i></span>&nbsp;&nbsp;Message</label>
                                    <textarea style="resize:none;outline: none;" class="form-control" id="sendermessage"
                                              name="sendermessage"
                                              placeholder="Enter message" cols="30" rows="10"></textarea>

                                </div>
                                <!-- end section -->



                                <!-- end .result  section -->

                            </div>
                            <!-- end .form-body section -->
                            <div class="form-submit">
                                <button type="submit" data-btntext-sending="Sending..." class="btn btn_submit">Submit</button>
                                <button type="reset" class="btn btn-default"> Cancel </button>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                    <!-- end .smart-forms section -->
                </div>
                <!--end item-->

                <div class="col-sm-5 col-sm-offset-1">
                    <br/>
                    <h4 class="oswald uppercase">Address Info</h4>
                    No.28 - 63739 street lorem ipsum City, Country <br />
                    Telephone: +1 1234-567-89000<br />
                    FAX: +1 0123-4567-8900<br />
                    <br />
                    E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br />
                    Website: <a href="{{url('/')}}">www.yoursitename.com</a>
                    <div class="clearfix"></div>

                    <div  class="" style="padding-bottom:20px;margin:20px 15px">
                        <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col-xs-12" id="googleMap" style="width:100%;height:350px">

                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </div>
    <!--end section-->
    <div class="clearfix"></div>

    @endsection