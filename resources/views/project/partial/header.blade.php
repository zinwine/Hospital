<!-- ******************** HEADER START ********************** -->
<header style="background-color:#fff; padding:20px" class="">

    <div class="container-fluid">
        <div class="col-sx-12 col-sm-4 col-md-6 head">
            <a href="{{url('/')}}"><img src="{{asset('project/img/coder.png')}}" class="img-responsive"></a>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3 head">
            <div class="col-xs-1">
                <ul class="nav navbar-nav">
                    <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true" style="line-height:35px;color: #00838f;font-size:20px
"></span></li>
                </ul>
            </div>
            <div class="col-xs-10">
                <p style="margin:0;">{{ __('main.call_me') }}</p>
                <p><b>091323254</b></p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3 head">
            <div class="col-xs-1">
                <ul class="nav navbar-nav">
                    <li>
                        <i class="fa fa-search" style="line-height:35px;font-size:20px;color:#00838f"></i>
                        <!--  <span class="glyphicon glyphicon-user" aria-hidden="true" style="line-height:35px;"></span> -->
                    </li>
                </ul>
            </div>
            <div class="col-xs-10">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="{{ __('main.search') }}">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ******************** HEADER END ********************** -->