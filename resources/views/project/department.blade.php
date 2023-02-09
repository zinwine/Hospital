@extends('project.master')

@section('title','Department')
@section('content')
<body style="background-color: #FCFCFC">
    <!-- ********************SERVICE START************************** -->

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Our Departments</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <!-- ********************SERVICE End************************** -->
    <div class="container service_tab">
        <div class="row">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#emergency" aria-controls="home" role="tab" data-toggle="tab">
                        <i class="fa flaticon-medical-lungs4 fa-4x"></i><p>Lungs Department</p></a></li>
                <li role="presentation"><a href="#operation" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa flaticon-medical-teeth2 text-theme-colored fa-4x"></i><p>Dental Department</p></a></li>
                <li role="presentation"><a href="#outdoor" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa flaticon-medical-heart36 text-theme-colored fa-4x"></i><p>Heart Department</p></a></li>

                <li role="presentation"><a href="#pharmacy" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa flaticon-medical-urology text-theme-colored fa-4x"></i><p>Urology Department</p></a></li>
                <li role="presentation"><a href="#cancer" aria-controls="settings" role="tab" data-toggle="tab"> <i class="fa flaticon-medical-human90
 fa-4x"></i><p>Eye Department</p></a></li>
                <li role="presentation"><a href="#blood_test" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa flaticon-medical-brain9 text-theme-colored fa-4x"></i><p>Neuroto Department</p></a></li>


            </ul>

            <!-- Tab panes -->
            <div class="col-sm-12">
                <div class="tab-content row">

                    <div role="tabpanel" class="tab-pane fade in active" id="emergency" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Lungs Department</h2>
                            <p style="font-family:'thin'; font-size:17px;">အဆုတ္ ႏွင့္ ရင္ေခါင္း ဌာနတြင္ အဆုတ္ႏွင့္ ပတ္သက္ေသာေရာဂါမ်ားကို စမ္းသပ္စစ္ေဆးကုသေပးျခင္း၊ဓါတ္မွန္ရိုက္ျခင္း၊ဓါတ္ခြဲစစ္ေဆးျခင္း တို႔ကို ေဆာင္ရြက္ေပးလ်က္ရိွပါသည္။အဆင့္ျမင့္နည္းပညာသံုးကုုထံုးမ်ားျဖင့္ လူနာမ်ားကိုစမ္းသပ္ကုသေပးလ်က္ရွိပါသည္။</p><p style="font-family:'thin'; font-size:17px;">Our department provides full support with additional outpatient care services, including full lung function testing, radiology, echocardiography, laboratory facilities, and sleep medicine services.  </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/dept/a8.png')}}" style="margin-top: 20px;" alt="" class="img-responsive">

                        </div>



                        <div class="container">
                            <hr style="border: 1px solid #ddd; margin-top: 90px;">
                            <div class="row">
                                <div class="heading_1 col-md-12" style="text-align: center;margin-top:30px;margin-bottom: 70px">
                                    <h2 class="doctor_h3">Doctor(Specialist)</h2>
                                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                    </div>

                    <div role="tabpanel" class="tab-pane fade in" id="operation" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Dental Department</h2>
                            <p style="font-family:'thin'; font-size:17px;">သြားႏွင့္ ခံတြင္းဌာနတြင္  သြားႏွင့္ ခံတြင္းဌာနတြင္  ကေလး သူငယ္မ်ားအတြက္ သြားႏွင့္ ခံတြင္း က်န္းမာေရး ပညာေပးအစီအစဥ္မ်ား လုပ္ေဆာင္ေပးလ်က္ရွိပါသည္။မူလတန္းေက်ာင္းမ်ားတြင္ လည္း သြားနွင့္ခံတြင္းဆိုင္ရာ ေရာဂါမ်ားကို သြားေရာက္စစ္ေဆးကုသေပးပါသည္။</p><p style="font-family:'thin'; font-size:17px;">
                            ႏႈတ္ခမ္းကဲြ အာေခါင္ကြဲ လူနာမ်ားကိုလည္း ခြဲစိတ္ကုသေပးလ်က္ရိိွပါသည္။
                            သြားနွင့္ခံတြင္းဌာနကို တနလၤာမွေသာၾကာေန႔အတြင္း မနက္ ၈ နာရီ ခြဲမွ ညေန ၄ နာရီအထိ ဖြင့္လွစ္ပါသည္။
                            </p><p style="font-family:'thin'; font-size:17px;">
                            Monday       8.30am to 4.30pm
                            <br>
                            Tuesday      8.30am to 4.30pm
                            <br>
                            Wednesday  8.30am to 4.30pm
                            <br>
                            Thursday        8.30am to 4.30pm
                            <br>
                            Friday      8.30am to 4.00pm</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/dept/a1.jpg')}}" alt="" class="img-responsive" style="margin-top: 20px;">
                        </div>

                        <div class="container">
                            <hr style="border: 1px solid #ddd; margin-top: 90px;">
                            <div class="row">
                                <div class="heading_1 col-md-12" style="text-align: center;margin-top:30px;margin-bottom: 70px">
                                    <h2 class="doctor_h3">Doctor(Specialist)</h2>
                                    <img src="{{asset('project/img/cc/ki.png')}}" alt="" >
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="outdoor" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Heart Department</h2>
                            <p style="font-family:'myanmar3'; font-size:17px; text-align:left;">ကၽႊႏု္ပ်တို႔    ဆေးရုံကြီး၏ နှလုံးကုဌာနတွင် နှလုံးကျန်းမာရေးအတွက် ကာကွယ်ရေးနှင့် စောစီးစွာရောဂါတွေ့ရှိရေးမှအစပြုကာရောဂါရှာဖွေရေး၊ ကုသရေး၊နှလုံးခွဲစိတ်ခြင်းနှင့် ပြန်လည်သန်စွမ်းရေး စသည်တို့အထိ အလုံးစုံပြည့်ဝသော စစ်ဆေးကုသမှုများ ပြုလုပ်ပေးလျက်ရှိပါသည်။ ဌာနရှိ အထူးကုပေါင်း ၃၀ ကျော်သည် အမေရိကန်၊ အင်္ဂလန်၊ ကနေဒါ၊ သြစတေးလျနှင့် ဘယ်လ်ဂျီယန်နိုင်ငံများတွင် ပညာသင်ကြားခဲ့သူများဖြစ်ကြပါသည်။ ၎င်းတို့တွင် ဆေးဖြင့်ကုသသည့်ဆရာဝန်များ၊ သွေးကြောအထူးကုဆရာဝန်များ၊ နှလုံးခွဲစိတ်ဆရာဝန်များ၊ နှလုံးပြန်လည်သန်စွမ်းရေး အထူးကုများနှင့်တကွ ကလေးနှလုံးအထူးကုများလည်း ပါဝင်ပါသည်။ 
                            </p><p style="font-family:'myanmar3'; font-size:17px; text-align:left;">
                            ကၽႊႏု္ပ်တို႔ ဆေးရုံကြီးသို့ လာရောက်သောလူနာများမှ နိုင်ငံတိုင်းလိုလို၏ ခက်ခဲရှုပ်ထွေးသောနှလုံးလူနာများကို အဆိုပါအထူးကုများ ကြုံတွေ့ခဲ့ပြီးဖြစ်ပါသည်။
                            </p><p style="font-family:'myanmar3'; font-size:17px; text-align:left;">
                            ကျွန်ုပ်တို့၏ဆရာဝန်များသည် ကျွမ်းကျင်စွာ လေ့ကျင့်ထားသော သူနာပြု၊ ဆေးဝါးကျွမ်းကျင်နှင့် အာဟာရပညာရှင် စုစုပေါင်း ၁၀၀ ကျော်ဖြင့် ပူးပေါင်းထားပါသည်။
                            </p><p style="font-family:'myanmar3'; font-size:17px; text-align:left;">
                            ထို့အပြင် ၁၀ နှစ်တိုင်ရရှိခဲ့သော အမေရိကန်အခြေစိုက် JCI တရားဝင်အသိအမှတ်ပြုခြင်းနှင့်အတူ ကျွန်ုပ်တို့နှလုံးကုသရေးအဖွဲ့၏ လုပ်ဆောင်မှုများသည် ရောဂါရှာဖွေခြင်းနှင့် နှလုံးရောဂါများကုသခြင်းတို့တွင် နိုင်ငံတကာအဆင့်အတန်းကိုမှီခြင်း သို့မဟုတ် ကျော်လွန်ကောင်းမွန်ခြင်းပင် ရှိပါသည်။
                            </p><p style="font-family:'myanmar3'; font-size:17px; text-align:left;">
                            ကျွန်ုပ်တို့သည် တစ်လလျှင် နှလုံးဝေဒနာရှင်ပေါင်း ၃၀၀၀ ကျော်ကို ကြည့်ရှုကုသပေးလျက်ရှိသည့်အထဲမှ လူနာ ၁၀၀၀ ကျော်မှာ ထိုးထွင်းဝင်ရောက်မှုမရှိသော အဲကိုးပုံရိပ်ရိုက်ခြင်းကဲ့သို့ စစ်ဆေးမှုများပြုလုပ်ကြသည်။ ထို့အပြင် ကျွန်ုပ်တို့သည် လစဉ် သွေးကြောပိုင်းဆိုင်ရာကုသမှုပေါင်း ၁၀၀ ကျော် စစ်ဆေးပြုလုပ်ပေးလျက်ရှိပါသည်။
                            </p>

 
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/dept/a5.jpg')}}" alt="" class="img-responsive" style="margin-top: 20px;">
                        </div>

                        <div class="container">
                            <hr style="border: 1px solid #ddd; margin-top: 90px;">
                            <div class="row">
                                <div class="heading_1 col-md-12" style="text-align: center;margin-top:30px;margin-bottom: 70px">
                                    <h2 class="doctor_h3">Doctor(Specialist)</h2>
                                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="pharmacy" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Urology Department</h2>
                            <p style="font-family:'thin'; font-size:17px;">ေက်ာက္ကပ္ဌာနတြင္ ေက်ာက္ကပ္ႏွင့္ပတ္သက္ေသာ ေရာဂါမ်ားကို အဆင့္ျမင့္စက္ကိရိယာမ်ားျဖင့္စမ္းသပ္ စစ္ေဆးေပးလ်က္ရိွပါသည္။ခြဲစိတ္ကုသမႈမ်ားကိုလည္း ေက်ာက္ကပ္ဆိုင္ရာ ဆရာဝန္ႀကီးမ်ားမွ ခြဲစိတ္ကုသေပးလ်က္ရိွပါသည္။</p> 
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/dept/a3.jpg')}}" alt="" class="img-responsive" style="margin-top: 20px;">
                        </div>

                        <div class="container">
                            <hr style="border: 1px solid #ddd; margin-top: 90px;">
                            <div class="row">
                                <div class="heading_1 col-md-12" style="text-align: center;margin-top:30px;margin-bottom: 70px">
                                    <h2 class="doctor_h3">Doctor(Specialist)</h2>
                                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="cancer" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Eye Department</h2>
                            <p style="font-family:'thin'; font-size:17px;">မ်က္စိဌာနတြင္ မ်က္စိနွင့္ပတ္သက္ေသာ ေရာဂါမ်ားကို အဆင့္ျမင့္စက္ကိရိယာမ်ားျဖင့္ စမ္းသပ္ စစ္ေဆးေပးလ်က္ရိွပါသည္။မ်က္စိခြဲစိတ္ကုသမႈမ်ားကိုလည္း မ်က္စိခြဲစိတ္ဆရာဝန္ႀကီးမ်ားမွ ခြဲစိတ္ကုသေပးလ်က္ရိွပါသည္။</p><p style="font-family:'thin'; font-size:17px;">မ်က္စိဌာနကို တနလၤာမွေသာၾကာေန႔အတြင္း မနက္ ၈ နာရီ ခြဲမွ ညေန ၄ နာရီအထိ ဖြင့္လွစ္ပါသည္။</p> 
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/dept/a6.jpg')}}" alt="" class="img-responsive" style="margin-top: 20px;">
                        </div>

                        <div class="container">
                            <hr style="border: 1px solid #ddd; margin-top: 90px;">
                            <div class="row">
                                <div class="heading_1 col-md-12" style="text-align: center;margin-top:30px;margin-bottom: 70px">
                                    <h2 class="doctor_h3">Doctor(Specialist)</h2>
                                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="blood_test" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Neurology Department</h2>
                            <p style="font-family:'thin'; font-size:17px;">ဦးေနွာက္ႏွင့္ အာရံုေၾကာ ဌာနတြင္ ဦးေခါင္းႏွင့္ ပတ္သက္ေသာ ေရာဂါမ်ားကို အဆင့္ျမင့္စက္ကိရိယာမ်ားျဖင့္စမ္းသပ္ စစ္ေဆးေပးလ်က္ရိွပါသည္။ ခြဲစိတ္ကုသမႈမ်ားကိုလည္း ဦးေနွာက္ႏွင့္ အာရံုေၾကာ 
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/dept/a7.jpg')}}" alt="" class="img-responsive" style="margin-top: 20px;">
                        </div>

                        <div class="container">
                            <hr style="border: 1px solid #ddd; margin-top: 90px;">
                            <div class="row">
                                <div class="heading_1 col-md-12" style="text-align: center;margin-top:30px;margin-bottom: 70px">
                                    <h2 class="doctor_h3">Doctor(Specialist)</h2>
                                    <img src="{{asset('project/img/cc/ki.png')}}" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail doctor_profile">

                                            <img src="{{asset('project/img/download (3).jpg')}}" alt="..." class="doctor_img img-responsive">

                                            <ul class="list-inline">
                                                <li><a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a></li>

                                            </ul>

                                            <div class="caption">
                                                <h4 class="doctor_h4">Dr. Aung Thu</h4>
                                                <p class="doctor_p">MBBS. MD (Internal Medicine), DM (Pulmonary and Critical Care  Medicine)</p>
                                                <a href="{{url('/doctor_profile')}}" class="btn btn-default doctor_btn">View Profile</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection