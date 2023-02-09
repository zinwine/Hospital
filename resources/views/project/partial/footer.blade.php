<!-- ******************** FOOTER START ********************** -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <p><i class="fa fa-home" aria-hidden="true"></i> Address - No(72), Sanyeiknyein(2)street, Kamayut</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i>Email - 72coder@gmail.com</p>
                <p><i class="fa fa-phone-square" aria-hidden="true"></i>Phone - 09123456789</p>
            </div>

            <div class="col-sm-6 copy" style="margin-top: -15px">
                <p>&copy; Copyright - <a href="http://72coder.org" target="_blank">72coder.org</a></p>

            </div>
            <a href="#"><i class="up_go fa fa-angle-double-up"></i></a>
        </div>
    </div>
</footer>
<!-- ******************** FOOTER END ********************** -->
<script>
    function initialize() {
        var mapProp = {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- ******************** Login Modal BOX START ********************** -->

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal1" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_content_login">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">

                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Member Login
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form>
                            <div class="form-group form_group_login">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label class="login_label">
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                            <button type="submit" class="btn btn_submit">SIGN IN</button> <br> <br>
                            <a href="#" class="form_a">Forget Password</a> /
                            <a href="#" class="form_a" data-toggle="modal" data-target="#myModalHorizontal2" data-dismiss="modal">Create Account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ******************** LOGIN MODAL BOX END ********************** -->


<!-- ******************** REGISTER LIGHT BOX START ********************** -->
<!-- Modal -->
<div class="modal fade" id="myModalHorizontal2" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_content_register">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">

                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Create Account
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="exampleInputUsername">User Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername" placeholder="User Name">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="exampleInputPassword2">Retype Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
                            </div>
                            <button type="submit" class="btn btn_submit">CREATE</button> <br> <br>
                            <a href="#login_form" class="form_a" data-toggle="modal" data-target="#myModalHorizontal1" data-dismiss="modal">If you are already member</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ******************** REGISTER LIGHT BOX END ********************** -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('project/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('project/js/navbar_fixed_top.js')}}"></script>
<script src="{{asset('project/js/myscript.js')}}"></script>
<script src="{{asset('project/js/go_top_plugin.js')}}"></script>
<script src="{{asset('project/js/bootstrap.min.js')}}"></script>
<script src="{{asset('project/assets/vendors/jquery.min.js')}}"></script>
<script src="{{asset('project/assets/owlcarousel/owl.carousel.js')}}"></script>

<!-- ******************** DOCTOR MULTISLIDE START ********************** -->
<script>
    $('#myCarousel').carousel({
        interval: 4000
    })

    $('.carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
//                    margin: 20
                }
            }
        })
    })
</script>

<script src="{{asset('project/assets/vendors/highlight.js')}}"></script>
<script src="{{asset('project/assets/js/app.js')}}"></script>
<script src="{{asset('project/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<!-- ******************** DOCTOR MULTISLIDE END ********************** -->