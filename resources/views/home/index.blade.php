@extends('layouts.home')

@section('title') {{ $setting -> title}} @endsection
@section('description') {{ $setting -> description}} @endsection
@section('keywords') {{ $setting -> keywords}} @endsection
@section('content')

    <!-- about -->
    <section class="about py-5">
        <div class="container py-lg-5 py-3">
            <h3 class="heading text-capitalize text-center">Welcome</h3>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div class="about-head text-center ">
                <div class="row about-grids-top mb-5">
                    <div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
                        <i class="fas fa-money-bill-alt" aria-hidden="true"></i>
                        <h4>Low Charges</h4>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h4>Safe & Secure</h4>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 mt-sm-0 mt-5 about-grid p-0">
                        <i class="fa fa-road" aria-hidden="true"></i>
                        <h4>Traffic Roads</h4>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
                        <i class="fa fa-taxi" aria-hidden="true"></i>
                        <h4>Transfer Service</h4>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <h4>24/7 Service</h4>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
                        <i class="fa fa-smile" aria-hidden="true"></i>
                        <h4>Customers</h4>
                    </div>
                </div>
                <div class="row about-grids-bottom text-left">
                    <div class="col-md-4 mb-md-0 mb-5 about-bottom-grid">
                        <h4 class="mb-4">We have been offering comfortable and safe journeys since our foundation day…</h4>
                        <a href="{{route('aboutus')}}"> More About Us</a>
                    </div>
                    <div class="col-md-4 about-bottom-grid">
                        <p>We have set off to transfer our tourism experience of 25 years to tourism transportation.
                            Beyond transferring you from one point to another, we are your fellow traveler.
                            Before our companionship, we make the necessary preparations. </p>  </div>
                    <div class="col-md-4 about-bottom-grid">
                        <p>We obtain the road and traffic information of your destination in advance,
                            and carry you to your destination safely, rapidly, and at affordable prices.
                            What we expect you to do is to evaluate us and prefer us for your next travel,
                            and also recommend us to your friends.
                            Have a Nice Trip! </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- //about -->
    <!-- Car-->
    <div class="container py-lg-5">
        <h5 class="heading mb-3 text-center">We have thought everything for your comfort</h5>
        <h3 class="heading text-capitalize text-center">Our Most Popular Vehicles of Last Days</h3><br>
        <div class="row">
            <!--1. Car Info-->
        @foreach($daily as $rs)
            <div class="col-md-3 col-sm-3 text-center">
                <div class="thumbnail">
                    <img src="{{Storage::url($rs->image) }}" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">{{$rs->title}} </h5>
                <h5 class="heading mb-3 text-center">{{$rs->description}}</h5>
                <a href="{{route('transfer', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">See Details </a>
            </div>
        @endforeach
        </div>
    </div>

    <!-- Car-->

    <!-- Why taxi cab -->
    <section class="why">
        <div class="container-fluid p-md-5 p-3">
            <h3 class="heading text-capitalize text-center">Why Transfer Service</h3>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div class="row why-grids">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 mb-4 grid1 text-center">
                        <h4 class="mx-auto"><span>1</span></h4>
                        <p class="mt-5">Top Rated Drivers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 mb-4 grid2 text-center">
                        <h4 class="mx-auto"><span>2</span></h4>
                        <p class="mt-5">Safety Journey</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 mb-4 grid3 text-center">
                        <h4 class="mx-auto"><span>3</span></h4>
                        <p class="mt-5">Without Peak Pricing</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 mb-4 grid4 text-center">
                        <h4 class="mx-auto"><span>4</span></h4>
                        <p class="mt-5">Fast And Secure</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 mb-md-0 mb-4 grid5 text-center">
                        <h4 class="mx-auto"><span>5</span></h4>
                        <p class="mt-5">Lowest Rates</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 mb-md-0 mb-4 grid6 text-center">
                        <h4 class="mx-auto"><span>6</span></h4>
                        <p class="mt-5">Best Quality Cars</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 mb-sm-0 mb-4 grid7 text-center">
                        <h4 class="mx-auto"><span>7</span></h4>
                        <p class="mt-5">Online Booking</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="py-5 px-2 grid8 text-center">
                        <h4 class="mx-auto"><span>8</span></h4>
                        <p class="mt-5">24/7 Transfer Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Why taxi cab -->

    <!-- team -->
    <section class="wthree-row py-5">
        <div class="container py-lg-5 py-3">
            <h3 class="heading text-capitalize text-center">Our Drivers</h3>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div class="row text-center">
                <div class="col-lg-3 col-sm-6 col-6 team-grids">
                    <div class="team-effect">
                        <img src="{{asset('assets')}}/images/team1.jpg" alt="img" class="img-fluid">
                    </div>
                    <!-- team text -->
                    <div class="footerv2-w3ls mt-3">
                        <h4>John Smith</h4>
                        <p class="my-2">Driver</p>
                        <p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1234</p>
                    </div>
                    <!-- //team text -->
                </div>
                <div class="col-lg-3 col-sm-6 col-6 team-grids">
                    <div class="team-effect">
                        <img src="{{asset('assets')}}/images/team2.jpg" alt="img" class="img-fluid">
                    </div>
                    <!-- team text -->
                    <div class="footerv2-w3ls mt-3">
                        <h4>Laura Hill</h4>
                        <p class="my-2">Driver</p>
                        <p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1235</p>
                    </div>
                    <!-- //team text -->
                </div>
                <div class="col-lg-3 col-sm-6 col-6 team-grids mt-lg-0 mt-5">
                    <div class="team-effect">
                        <img src="{{asset('assets')}}/images/team3.jpg" alt="img" class="img-fluid">
                    </div>
                    <!-- team text -->
                    <div class="footerv2-w3ls mt-3">
                        <h4>Smith Kevin</h4>
                        <p class="my-2">Driver</p>
                        <p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1236</p>
                    </div>
                    <!-- //team text -->
                </div>
                <div class="col-lg-3 col-sm-6 col-6 team-grids mt-lg-0 mt-5">
                    <div class="team-effect">
                        <img src="{{asset('assets')}}/images/team4.jpg" alt="img" class="img-fluid">
                    </div>
                    <!-- team text -->
                    <div class="footerv2-w3ls mt-3">
                        <h4>Thomson Doe</h4>
                        <p class="my-2">Driver</p>
                        <p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1237</p>
                    </div>
                    <!-- //team text -->
                </div>
            </div>
        </div>
    </section>
    <!-- //team -->

    <!-- Our prices -->
    <section class="prices py-5">
        <div class="container py-lg-5 py-3">
            <h3 class="heading text-capitalize text-center">Our Pricing</h3>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div class="row pricing-grids">
                <div class="col-lg-3 col-md-6 price-grid">
                    <h3 class="mb-4">Micro Taxi -- <span class="">2$</span></h3>
                    <h4 class="my-3">Small fares for short rides</h4>
                    <ul class="d-flex mt-3">
                        <li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
                        <li class="mr-3">1 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-5 price-grid">
                    <h3 class="mb-4">Mini Taxi -- <span class="">3$</span></h3>
                    <h4 class="my-3">Small fares for short rides</h4>
                   <ul class="d-flex mt-3">
                        <li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
                        <li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
                        <li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
                    <h3 class="mb-4">Prime Taxi -- <span class="">4$</span></h3>
                    <h4 class="my-3">Small fares for short rides</h4>
                    <ul class="d-flex mt-3">
                        <li class="mr-3">3 <i class="fas fa-male" aria-hidden="true"></i></li>
                        <li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
                        <li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
                    <h3 class="mb-4">Sedan Taxi -- <span class="">5$</span></h3>
                    <h4 class="my-3">Small fares for short rides</h4>
                    <ul class="d-flex mt-3">
                        <li class="mr-3">4 <i class="fas fa-male" aria-hidden="true"></i></li>
                        <li class="mr-3">3 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
                        <li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //Our prices -->

    <!--/testimonials-->
    <section class="testimonials banner-bottom-agile-w3ls py-5">
        <div class="container py-lg-5 py-3">
            <h3 class="heading text-capitalize text-center">Testimonial</h3>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div class="inner-sec-w3layouts-agileits">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <p> The driver was really smart, always smiled and was really friendly.
                                    The driver was always prompt and never even 1 second late.
                                    Best transfer company I have ever used, thank you very much easy go transfers
                                    you are amazing </p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{asset('assets')}}/images/team1.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Mary Jane</h5>
                                    <p>Customer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <p> Very good service and good price, and nice vehicle too!
                                    Pickup timing was perfect at the airPort and also at the hotel!
                                    I will absolutly recomand to all my friends! </p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{asset('assets')}}/images/team3.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Peter Guptill</h5>
                                    <p>Customer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <p> Very easy to take contact by whatsapp and price was perfect.
                                    The car was very clean and the drivers were friendly and always came in time. </p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{asset('assets')}}/images/team1.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Steven Wilson</h5>
                                    <p>Customer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <p> The driver was really smart, always smiled and was really friendly.
                                    The driver was always prompt and never even 1 second late.
                                    Best transfer company I have ever used, thank you very much easy go transfers
                                    you are amazing </p></div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{asset('assets')}}/images/team3.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Mary Jane</h5>
                                    <p>Customer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <p> Very good service and good price, and nice vehicle too!
                                    Pickup timing was perfect at the airPort and also at the hotel!
                                    I will absolutly recomand to all my friends! </p>	</div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{asset('assets')}}/images/team1.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Peter Guptill</h5>
                                    <p>Customer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info">
                            <div class="feedback-top p-4 p-4">
                                <p> Very easy to take contact by whatsapp and price was perfect.
                                    The car was very clean and the drivers were friendly and always came in time. </p></div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{asset('assets')}}/images/team3.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Steven Wilson</h5>
                                    <p>Customer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->


@endsection
