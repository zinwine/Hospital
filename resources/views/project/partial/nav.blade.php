<!-- ******************** NAVBAR START ********************** -->
{{--<nav class="navbar navbar-default" style="margin-top:;">--}}

    {{--<div class="container-fluid">--}}
        {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}

            {{--</button>--}}
            {{--<!-- <a href="#" class="navbar-brand">Home</a> -->--}}
        {{--</div>--}}

        {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}


            {{--<ul class="nav na navbar-nav ">--}}
                {{--<li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-info-circle"></i> Information <span style="color:#fff;" class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="{{url('/news')}}">News</a></li>--}}

                        {{--<li><a href="{{url('/articles')}}">Articles</a></li>--}}

                        {{--<li><a href="{{url('/career')}}">Career</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="{{url('/room_category')}}"><i class="fa fa-plus-square"></i> Room</a></li>--}}
                {{--<li><a href="{{url('/services')}}"><i class="fa fa-thumbs-o-up"></i> Services</a></li>--}}

                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-hospital-o"></i> About Us <span style="color:#fff;" class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="{{url('/about_us')}}">About Us</a></li>--}}


                        {{--<li><a href="{{url('/contact_us')}}">Contact Us</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-sign-in"></i> Login <span style="color:#fff;" class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="#" data-toggle="modal" data-target="#myModalHorizontal1">Login</a></li>--}}


                        {{--<li><a href="#" data-toggle="modal" data-target="#myModalHorizontal2">Register</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}

            {{--<ul class="nav na navbar-nav navbar-right">--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-exchange"></i> Language <span style="color:#fff;" class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="">Myanmar</a></li>--}}

                        {{--<li><a href="#">English</a></li>--}}


                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div><!-- /.navbar-collapse -->--}}
    {{--</div><!-- /.container-fluid -->--}}
{{--</nav>--}}
<!-- ******************** NAVBAR END ********************** -->


{{--<nav class="navbar navbar-default" style="margin-top:;">--}}
    {{--<div class="container-fluid">--}}
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav na navbar-nav ">
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> {{ __('main.home') }}
                        </a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-info-circle"></i> Information <span style="color:#fff;" class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/news')}}">News</a></li>

                                <li><a href="{{url('/articles')}}">Articles</a></li>

                                <li><a href="{{url('/career')}}">Career</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/room_category')}}"><i class="fa fa-plus-square"></i> {{ __('main.room') }}
                        </a></li>
                        <li><a href="{{url('/services')}}"><i class="fa fa-thumbs-o-up"></i> {{ __('main.service') }}
                        </a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-hospital-o"></i> {{ __('main.about') }} <span style="color:#fff;" class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/about_us')}}">{{ __('main.about') }}</a></li>


                                <li><a href="{{url('/contact_us')}}">{{ __('main.contact') }}</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-sign-in"></i> Login <span style="color:#fff;" class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" data-toggle="modal" data-target="#myModalHorizontal1">Login</a></li>


                                <li><a href="#" data-toggle="modal" data-target="#myModalHorizontal2">Register</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav na navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-exchange"></i> {{ __('main.lang') }} <span style="color:#fff;" class="caret"></span></a>
                            {{-- <ul>
                            <li><a href="{{url('lang/mm')}}">Myanmar</a></li>
                            
                            <li><a href="{{url('lang/en')}}">English</a></li>
                            
                            
                        </ul> --}}
                                <ul class="dropdown-menu" role="menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->

    </div>

<script>
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>
<script src="js/jquery.js"></script>
<script src=js/jquery.min.js></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/bootstrap.js"></script>

</nav>