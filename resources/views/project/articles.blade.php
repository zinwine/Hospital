@extends('project.master')

@section('title','Articles')
@section('content')

    <div class="container-fluid contact_header">
     <img class="kanote" src="{{asset('project/img/cc/ka.png')}}">
         <div class="col-xs-12">
                <h1 style="line-height:100px;">Articles</h1>
            </div>
    <img class="kanote_right" src="{{asset('project/img/cc/kan.png')}}">
        </div>

    <div class="container">


        <div class="row article_row" >



            <div class="col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/article/stones-in-ureter.jpg')}}" class="img-responsive img" alt="...">

                    <div class="caption">

                        <h4 class="hh">ဆီးေက်ာက္တည္ျခင္း အေၾကာင္းသိေကာင္းစရာ</h4>
                        <div class="article_date">

                            <i class="fa fa-user"></i>&nbsp;&nbsp;Lavender
                            &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                        </div>
                        <p class="">ဆီးေက်ာက္တည္ျခင္းကို ကာကြယ္လို႔ရတဲ့ ေရာဂါတစ္ခုလို႔ ေျပာရင္ တစ္ဝက္ေတာ့မွန္ပါ တယ္။ Uolithiasis (Renal Stones) လို႔ေခၚတဲ့ ဆီးေက်ာက္တည္ေရာ ဂါ ျဖစ္ပြား ရတဲ့ အေၾကာင္း ရင္းေတြကို ေလ့လာၾကည့္တဲ့ အခါ အဓိက အုပ္စု ႀကီးႏွစ္ခုရွိပါတယ္။ ပထမ အုပ္စုကေတာ့ ခႏၶာကိုယ္တြင္းမွာ ရွိတဲ့ ေရာဂါတစ္ခုခုေၾကာင့္ ဆီးေက်ာက္ တည္ ျခင္းျဖစ္ပါတယ္။</p>
                        <a href="{{url('/single_article')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa
                    fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>


                    </div>

                </div>

            </div>

            <div class="col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/article/gar.jpg')}}" class="img-responsive img" alt="...">

                    <div class="caption">

                        <h4 class="hh">ၾကက္သြန္ျဖဴ ၏ က်န္းမာေရးအက်ိဳးေက်းဇူးမ်ား</h4>
                        <div class="article_date">

                            <i class="fa fa-user"></i>&nbsp;&nbsp;Dr.Aung Thu
                            &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                        </div>
                        <p class="">ၾကက္သြန္ျဖဴမွ ရရွိႏိုင္ေသာ အက်ိဳး ေက်းဇူးမ်ားကို ေဖာ္ျပေပးလုိက္ပါတယ္။ ၾကက္သြန္ျဖဴဟာ ေဆးဖက္၀င္ အစားအစာ တစ္ခုျဖစ္တာေၾကာင့္ဟင္းခြက္ေတာ္ေတာ္ မ်ားမ်ားမွာပါ၀င္ေနတာ ျဖစ္ပါတယ္။  ေဆးနည္းေပါင္းမ်ားစြာတို့မွာလည္းၾကက္သြန္ျဖဴ ကပါ၀င္ထားပါတယ္။ (၁)ၾကက္သြန္ျဖဴကို ပံုမွန္စားသံုးသူဟာ ကိုယ္ခံ အားေကာင္းေနသည့္အတြက္ </p>
                        <a href="{{url('/single_article')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa
                    fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>


                    </div>

                </div>

            </div>


        </div>

        <div class="row article_row" >



            <div class="col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/article/Walking_baby.jpg')}}" class="img-responsive img" alt="...">

                    <div class="caption">

                        <h4 class="hh">ကေလးနဲ႔ အယူအဆ အမွားမ်ား</h4>
                        <div class="article_date">

                            <i class="fa fa-user"></i>&nbsp;&nbsp;Dr.Mya Mya Myint
                            &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                        </div>
                        <p class="">ကေလးေခါင္းတံုးရိတ္ျခင္း ကေလးငယ္ရဲ႕ ဦးေရျပားဟာ နုနယ္ပါတယ္ထိမိရွမိ ရင္ေတာင္ပိုးဝင္လြယ္ပါတယ္ပိုးဝင္ရင္ ဘာျဖစ္တတ္လဲဆိုေတာ့.... ေသတတ္ပါတယ္ မိမိရင္ေသြးကို မသတ္မိပါေစနဲ႔ ... ေခါင္းတံုးရိတ္ျခင္း ေၾကာင့္ ဆံပင္ပိုသန္မလာပါ ဆံသားနုေလးမ်ားၾကမ္းသြားတာပဲရွိပါတယ္ ကေလးငယ္ဟာ မိဘမ်ိဳးရိုးေပၚ မူတည္ျပီးဆံပင္ပါးတတ္ၾကပါတယ္ ႀကီးလာတာနဲ႔အမ်ွ</p>
                        <a href="{{url('/single_article')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa
                    fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>


                    </div>

                </div>

            </div>

            <div class="col-sm-6">
                <div class="thumbnail">
                    <img src="{{asset('project/img/article/health4.jpg')}}" class="img-responsive img" alt="...">

                    <div class="caption">

                        <h4 class="hh">အ႐ိုးပြေရာဂါအေၾကာင္း သိမွတ္ဖြယ္ရာအျဖာျဖာ</h4>
                        <div class="article_date">

                            <i class="fa fa-user"></i>&nbsp;&nbsp;Thmar Daw
                            &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;2017/12/19

                        </div>
                        <p class="">အ႐ိုးဆိုတာ သက္ရွိတစ္သွ်ဴးတစ္မ်ဳိးျဖစ္ၿပီး ¤င္းကို ဆဲလ္မ်ား၊ ေကာ္လာဂ်င္ဖိုင္ဘာမ်ား၊ သတၱဳဓာတ္မ်ားျဖင့္ ဖြဲ႕စည္းတည္ေဆာက္ ထားပါတယ္။ ပ်မ္းမွ်အသက္ ၃၅ႏွစ္ ေနာက္ပိုင္းမွစ၍ အ႐ိုးရဲ႕ သတၱဳဓာတ္မ်ားဟာ စြမ္းေဆာင္ရည္တျဖည္းျဖည္း က်ဆင္းလာတာေၾကာင့္ အ႐ိုး၏သိပ္ သည္းဆေလ်ာ့နည္းသြားကာ၊သန္မာမႈ လည္း ေလ်ာ့က်သြား ပါတယ္။ သို႔ေသာ္ လူတစ္ဦးႏွင့္တစ္ဦး အ႐ိုးအားက်ဆင္း</p>
                        <a href="{{url('/single_article')}}" class="pull-right">Read More&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><i class="fa
                    fa-angle-double-right"></i></a>
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