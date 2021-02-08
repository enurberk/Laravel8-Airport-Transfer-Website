@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!--footer-->
<footer class="py-sm-5 py-4 px-md-5 px-3">
    <div class="container-fluid pt-lg-5">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 footer-grid-agileits-w3ls1 text-left">
                <h3 class="mb-sm-5 mb-4 mt-sm-0 mt-4">About Company</h3>
                <p>We have set off to transfer our tourism experience of 25 years to tourism transportation. Beyond transferring you from one point to another, we are your fellow traveler. </p>
                <a href="{{route('aboutus')}}" class="read">Know More <i class="fas fa-caret-right"></i></a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 footer-grid-agileits-w3ls1 text-left">
                <h3 class="mb-sm-5 mb-4">Locate Us</h3>
                <ul class="w3ls-footer-bottom-list">
                    <li> <span class="fas fa-map-marker"></span>{{$setting->address}}</li>
                    <li> <span class="fas fa-envelope"></span> <a href="mailto:{{$setting->email}}"> {{$setting->email}}</a> </li>
                    <li> <span class="fas fa-phone"></span> {{$setting->phone}} </li>
                    <li> <span class="fas fa-fax"></span> {{$setting->fax}}</li>
                    <li> <span class="fas fa-globe"></span> <a href="{{route('home')}}">  www.websitename.com</a> </li>
                    <li> <span class="fas fa-clock"></span>  Office Time : 8:00 a.m - 6:00 p.m</li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-0 mb-5 footer-grid-agileits-w3ls text-left">
                <div class="tech-btm">
                    <h3 class="mb-sm-5 mb-4">Latest Posts</h3>
                    <div class="blog-grids row mb-3">
                        <div class="col-4 pr-0 blog-grid-left">
                            <a href="_blog.html">
                                <img src="{{asset('assets')}}/images/blog1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-8 blog-grid-right">

                            <h5>
                                <a href="_blog.html">If your plane to Istanbul lands to Sabiha Gökçen Airport </a>
                            </h5>
                            <div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 19 Apr, 2018</span>
                            </div>
                        </div>

                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-4 pr-0 blog-grid-left">
                            <a href="_blog.html">
                                <img src="{{asset('assets')}}/images/blog2.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-8 blog-grid-right">

                            <h5>
                                <a href="_blog.html">You may already heard of some news about taxis requiring </a>
                            </h5>
                            <div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 20 Apr, 2018</span>
                            </div>
                        </div>

                    </div>
                    <div class="blog-grids row">
                        <div class="col-4 pr-0 blog-grid-left">
                            <a href="_blog.html">
                                <img src="{{asset('assets')}}/images/blog3.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-8 blog-grid-right">

                            <h5>
                                <a href="_blog.html">For many years, Istanbul had two airports, one is Atatürk Airport </a>
                            </h5>
                            <div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 21 Apr, 2018</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- subscribe -->
            <div class="col-lg-3 col-sm-6 subscribe-main footer-grid-agileits-w3ls text-left">
                <!--	<h3 class="mb-sm-5 mb-4">Newsletter</h3>
                    <div class="subscribe-main text-left">
                        <div class="subscribe-form">
                            <form action="#" method="post" class="subscribe_form">
                                <input class="form-control" type="email" placeholder="Enter Your Email..." required="">
                                <button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                       </div>
                    </div> -->
                <!-- //subscribe -->
                <div class="footer-social">
                    <div class="copyrighttop">
                        <h3 class="mb-sm-5 mb-4">Stay In Touch</h3>
                        <ul>
                            @if($setting->facebook != null)
                            <li class="mr-1">
                                <a class="facebook" href="{{$setting->facebook}}" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            @endif
                            @if($setting->twitter != null)
                            <li class="mr-1">
                                <a class="facebook" href="{{$setting->twitter}}" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            @endif
                            @if($setting->instagram != null)
                            <li class="mr-1">
                                <a class="facebook" href="{{$setting->instagram}}" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            @endif
                            @if($setting->youtube != null)
                            <li class="mr-1">
                                <a class="facebook" href="{{$setting->youtube}}" target="_blank"    >
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            @endif
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="footer-cpy text-center pt-sm-5 mt-sm-5 mt-4 pt-3">
            <div class="w3layouts-agile-copyrightbottom">
                <p>© 2021 {{$setting -> company}} | All Rights Reserved </p>
            </div>
        </div>
        <!-- //copyright -->
    </div>
</footer>
<!-- //footer -->

<!-- js-scripts -->

<!-- js -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->

<!-- carousel -->
<script src="{{asset('assets')}}/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
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
                    items: 1,
                    nav: false
                },
                900: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>
<!-- //carousel -->

<!--slider-->
<script src="{{asset('assets')}}/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        // Slideshow 1
        $("#slider1").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "centered-btns"
        });
    });
</script>
<!--//slider-->

<!-- start-smoth-scrolling -->
<script src="{{asset('assets')}}/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>
