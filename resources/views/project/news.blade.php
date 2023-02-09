@extends('project.master')

@section('title','News')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">News</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">


        <div class="row news_row" >


            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/news/alcohol.jpg')}}" class="img-responsive img" alt="...">
                    <div class="table-bordered text-center date">

                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;Lavender
                        &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                    </div>
                    <div class="caption news_cap">

                        <h4 >အရက္ေသာက္ျခင္းက အနည္းဆံုးကင္ဆာအမ်ိဳးအစား ၇မ်ိဳးကို တုိက္ရုိက္ျဖစ္ေပၚေစ</h4>
                        <p class="text-justify">က်န္းမာေရးကၽြမ္းက်င္သူေတြကေတာ့အရက္အေပၚကုိ သတိေပးတဲ့ထုတ္ျပန္ခ်က္တစ္ခုကိုထပ္မံ ထုတ္ျပန္လုိက္ျပန္ပါၿပီ။ ေလ့လာခ်က္အသစ္တစ္ရပ္ အရအယ္လ္ကုိေဟာဟာ ပမာဏအနည္းငယ္ေသာက္သံုးရုံနဲ႔တင </p>
                        <a href="{{url('/single_new')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/news/Brisk_walk.jpg')}}" class="img-responsive img" alt="...">
                    <div class="table-bordered text-center date">

                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;Dr.Aung Thu
                        &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                    </div>
                    <div class="caption news_cap">

                        <h4 class="hh">ခပ္သုတ္သုတ္လမ္းေလွ်ာက္ျခင္းဟာ ဆီးခ်ိဳေရာဂါျဖစ္ပြားမႈမွ ကာကြယ္ေပးႏုိင္</h4>
                        <p class="text-justify">ခပ္သြက္သြက္လမ္းေလွ်ာက္တာဟာ အေႏွးေျပးတာထက္စာရင္ ေသြးထဲမွာရွိတဲ့ သၾကားပမာဏကုိပုိမုိထိန္းခ်ဳပ္ေပးႏုိင္ၿပီး ဆီးခ်ဳိေရာဂါျဖစ္ပြားမႈကုိ ေလ်ာ့က်ေစတယ္လုိ႔ ေလ့လာ ခ်က္အသစ္တစ္ရပ္ အရသိရပါတယ္။လူေတြရဲ႕ ဆီးခ်ိဳဲ</p>
                        {{--<a href="{{url('/single_new')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>--}}
                        <a href="{{url('/single_new')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/news/beer.jpg')}}" class="img-responsive img" alt="...">
                    <div class="table-bordered text-center date">

                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;Dr.Mya Mya Myint
                        &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                    </div>
                    <div class="caption news_cap">

                        <h4 class="hh"> ေဆးလိပ္ေသာက္တဲ့အမ်ိဳးသမီးေတြဟာ ဦးေႏွာက္ေသြးယိုစီးမႈပိုမုိျဖစ္ပြားႏုိင္</h4>
                        <p class="text-justify">ေဆးလိပ္ေသာက္သူေတြမွာ ျဖစ္ေလ့ရွိတဲ့ ဦးေႏွာက္ထဲေသြးယုိစီးမႈေၾကာင့္ ေလျဖတ္ႏုိင္တဲ့ လကၡဏာေတြဟာအမ်ိဳးသမီးေတြမွာ ပုိမုိျဖစ္ပြားႏုိင္တယ္လုိ႔ သုေတသီေတြရဲ႕ ေျပာၾကားခ်က္အရ သိရပါတယ္။

ဒီလုိေလျဖတ </p>
                        <a href="{{url('/single_new')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row news_row" >


            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/news/baby.png')}}" class="img-responsive img" alt="...">
                    <div class="table-bordered text-center date">

                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;Soe Thu
                        &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                    </div>
                    <div class="caption news_cap">

                        <h4 class="hh">ဖခင္ေတြက ကေလးငယ္ကို ပံုျပင္ဖတ္ျပတာဟာ ကေလးေတြကို ဘာသာစကား ထူးခၽြန္ေစ</h4>
                        <p class="text-justify">
ဖခင္ေတြအေနနဲ႔ သူတို႔ရဲ႕ ကေလးငယ္ေတြကို ညဘက္မွာ အိပ္ယာ၀င္ပံုျပင္ေတြေျပာျပျခင္းဟာ ကေလးငယ္ေတြကို ဘာသာစကားပိုင္းမွာ ထူးခၽြန္လာေစႏိုင္တယ္လို႔ သုေတသနတစ္ခုက ေဖာ္ျပလိုက္ပါတယ္။

အေမရိကန္ျပည္ေထာင္စုမွာရွိတဲ့ Harvard
                        <a href="{{url('/single_new')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/news/Coffee.jpg')}}" class="img-responsive img" alt="...">
                    <div class="table-bordered text-center date">

                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;Chit Thu Wai
                        &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                    </div>
                    <div class="caption news_cap">

                        <h4 class="hh">
ေကာ္ဖီေသာက္သံုးျခင္းက အူမႀကီးကင္ဆာကို သက္သာေပ်ာက္ကင္းေစႏုိင္
</h4>
                        <p class="text-justify">ေကာ္ဖီေသာက္သံုးခဲ့တဲ့အဆင့္၃အူမႀကီး ကင္ဆာအဆင့္ရွိ လူနာမ်ားဟာသူတို႔ရဲ႕ကင္ဆာေရာဂါ တစ္၀က္နီးပါးသက္သာေပ်ာက္ကင္းၾကၿပီး ေသဆံုးႏိုင္ တဲ့အခြင့္အလမ္းသံုးပံုပံုတစ္ပံုခန္႔နည္းပါး သြားေၾကာင္း

</p>
                        <a href="{{url('/single_new')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/news/Sidesleeping.jpg')}}" class="img-responsive img" alt="...">
                    <div class="table-bordered text-center date">

                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;Phyu Phyu Kyaw Thein
                        &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                    </div>
                    <div class="caption news_cap">

                        <h4 class="hh">ေဘးတစ္ေစာင္း အိပ္စက္ျခင္းရဲ႕ ေကာင္းက်ိဳးမ်ား</h4>
                        <p class="text-justify">သင့္ရဲ႕ အိပ္စက္တဲ့ အေနအထားဟာ သင့္ကို အယ္လ္ဇိုင္းမား လိုေရာဂါမ်ိဳး ျဖစ္လာေစဖို႔အတြက္ အခြင့္အလမ္း မ်ားေစႏိုင္တယ္လို႔ သုေတသန အသစ္တစ္ခုက ေဆြးေႏြးတင္ျပလိုက္ပါတယ္။

ေဘးတစ္ေစာင္း အိပ္စက္ျခင္းဟာလည္း သင့္ဦးေႏွာက္အတြင္းမွာ ရွိတဲ့ တစ္ေန႔တာရဲ႕ ဓါတုေဗဒ ပစၥည္းေတြ ကပ္တြယ္ရႈပ္ပြ ေနျခင္းကို
</p>
                        <a href="{{url('/single_new')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


        </div>

        <nav>
            <ul class="pagination pull-right">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>


    </div>

    @endsection