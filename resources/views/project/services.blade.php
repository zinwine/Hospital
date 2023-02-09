@extends('project.master')

@section('title','Services')
@section('content')

<div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Services</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container service_tab">
        <div class="row">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="as active">
                    <a class="aa" href="#emergency" aria-controls="home" role="tab" data-toggle="tab">
                        <i class="fa flaticon-medical-ambulance14 fa-4x"></i><p>Emergency Care</p></a>
                </li>

                <li role="presentation"><a href="#operation" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa flaticon-medical-illness text-theme-colored fa-4x"></i><p>Operation</p></a></li>

                <li role="presentation"><a href="#outdoor" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa flaticon-medical-stethoscope10 text-theme-colored fa-4x"></i><p>Outdoor Checkup</p></a></li>
                <li role="presentation"><a href="#pharmacy" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa flaticon-medical-tablets9 text-theme-colored fa-4x"></i><p>Pharmacy</p></a></li>
                <li role="presentation"><a href="#cancer" aria-controls="settings" role="tab" data-toggle="tab"> <i class="fa flaticon-medical-medical51
 fa-4x"></i><p>Day Care</p></a></li>
                <li role="presentation"><a href="#blood_test" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa flaticon-medical-hospital35 text-theme-colored fa-4x"></i><p>Blood Test</p></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="col-sm-12">
                <div class="tab-content row ">

                    <div role="tabpanel" class="tab-pane fade in active" id="emergency" style="transition:2s;">
                        <div class="col-md-6 ">
                            <h2>Emergency Care</h2>
                            <p style="font-size: 17px; font-family: 'thin'; text-align:left;">
                            Emergency Care Deparment သည္ က်န္းမာေရးေစာင့္ေရွာက္ျခင္းဝန္ေဆာင္မႈမ်ားကို ကြ်မ္းက်င္ဆရာဝန္မ်ား၊ သူနာျပဳမ်ားျဖင့္ ၂၄ နာရီ ပတ္လံုးထိေရာက္စြာခ်က္ခ်င္းေဆာင္ရြက္ေပး ပါသည္။</p><p style="font-size: 17px; font-family: 'thin'; text-align:left;">
                            24 hr service (၂၄နာရီ ဝန္ေဆာင္မႈ)
                            </p><p style="font-size: 17px; font-family: 'thin'; text-align:left;">
                            - Ambulance cars with life saving equipments (အသက္ကယ္ စက္ကိရိယာမ်ား ပါဝင္ေသာ လူနာတင္ယာဥ္)
                            </p><p style="font-size: 17px; font-family: 'thin'; text-align:left;">
                            - Accompanied by doctors and nurse according to request (လိုအပ္ပါက ဆရာဝန္နွင့္ သူနာျပဳမ်ား လိုက္ပါေစာင့္ေရွာက္မႈ)
                            </p><p style="font-size: 17px; font-family: 'thin'; text-align:left;">
                            - Available for airport pick-up (ေလဆိပ္တြင္ လူနာသြားေရာက္ ေခၚယူေသာဝန္ေဆာင္မႈ)
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/photo_06rm.jpg')}}" alt="" class="img-responsive">

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" style="transition:2s;" id="operation">
                        <div class="col-md-6">
                            <h2>Operation</h2>
                            <p style="font-size: 17px; font-family: 'thin'; text-align:left;">
                            ကြ်န္ုပ္တို႔ေဆးရံုရွိအေရးေပၚခြဲစိတ္မႈမ်ားအတြက္ ကြ်မ္းက်င္ခဲြစိတ္ ဆရာဝန္ႀကီးမ်ားမွ ေန႔စဥ္ တာဝန္ယူခြဲစိတ္ေပးလ်က္ရိွပါသည္။</p><p style="font-size: 17px; font-family: 'thin';">
                            ခြဲစိတ္ကုသျပီးေသာလူနာမ်ားကို အထူးၾကတ္မတ္ကုသေဆာင္တြင္ ဆရာဝန္ၾကီးမ်ား သူနာျပဳမ်ားျဖင့္ အနီးကပ္ေစာင့္ၾကည့္ေပးပါသည္။

                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/pexels-photo-247786 (1).jpeg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="outdoor" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Outdoor Health Care</h2>
                            <p  style="font-size: 17px; font-family: 'thin'; text-align:left;">ကြ်န္ုပ္တို႔ေဆးရုံႀကီးမွ  က်န္းမာေရးေစာင့္ေရွာက္မႈလိုအပ္ေသာေက်းရြာ မ်ားသို႔ ကြင္းဆင္းေဆးကုသမႈမ်ားကို
                                ေဆာင္ရြက္ ေပး လ်က္ ရိွပါသည္။</p>
                            <p  style="font-size: 17px; font-family: 'thin'; text-align:left;">ေက်းရြာမ်ားမွလူနာမ်ား၏က်န္းမာေရးအတြက္  ေဆြးေႏြးတိုင္ပင္နိုင္ရန္ ၂၄နာရီ ဝန္ေဆာင္မႈေပးလ်က္ရိွပါသည္။</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/outdoorcheckup.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="pharmacy" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Pharmacy</h2>
                            <p style="font-size: 17px; font-family: 'thin';">(Available at both Hospital and Clinic)</p><p style="font-size: 17px; font-family: 'thin';">
                            ေစ်းနႈန္းမွန္ကန္ေသာ ေဆးဝါးမ်ားကို ဆရာဝန္ညႊန္ၾကားခ်က္အတိုင္း တိက်မွန္ကန္စြာ ဝယ္ယူနိင္ပါသည္။တရားဝင္ မွတ္ပံုတင္ျပီးေသာ ေဆးဝါးမ်ားကိုသာ ေရာင္းခ်ေပး လ်က္ရွိပါသည္။</p> 
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/thermometer-temperature-fever-flu.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="cancer" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Day care Service</h2>
                            <p style="font-size: 17px; font-family: 'thin'; text-align:left;">ေဆးရံုတြင္ တက္ေရာက္ကုသေနေသာ လူနာမ်ား သက္ေတာင့္သက္သာ ျဖင့္  အဆင္ေျပစြာ ကုသနိုင္ရန္အတြက္ Day care service centre ကို ပထမထပ္တြင္ထားရိွေပးပါသည္။ </p><p style="font-size: 17px; font-family: 'thin'; text-align:left;"> ေန႔စဥ္ ဆရာဝန္ႀကီးမ်ား မွ လူနာမ်ားကို လွည့္လည္စမ္းသပ္ ႀကည့္ရႈ စစ္ေဆးေပးပါသည္။ လူနာမ်ား၏ က်န္းမာေရးကို သူနာျပဳမ်ားမွ အခ်ိန္နွင့္တေျပးညီ ေစာင့္ေရွာက္ေပးပါသည္။</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/popular-myths-about-cancer-1.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="blood_test" style="transition:2s;">
                        <div class="col-md-6">
                            <h2>Blood Test</h2>
                            <p style="font-size: 17px; font-family: 'thin'; text-align:left;">ကြ်န္ုပ္တို႔ေဆးရုံႀကီးမွ Blood test service ကို ဝန္ေဆာင္မႈေပးလ်က္ရွိပါသည္။ေသြးစစ္ဌာနသည္ ေဆးရံု၏ ေျမညီထပ္တြင္တည္ရိွျပီး မနက္ ၈း၃၀ မွ ညေန ၄း၃၀ အထိ ဖြင့္လွစ္ထားရွိပါသည္။ </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('project/img/diabetes-blood-sugar-diabetic-medicine-46173 (1).jpeg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection