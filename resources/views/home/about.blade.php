@extends('layouts.home')

@section('title', 'About Us -' . $setting -> title)
@section('description', $setting -> description)
@section('keywords', $setting -> keywords)
@section('content')

    <!-- about -->
    <section class="about py-5">
        <div class="container py-lg-5 py-3">
            <h3 class="heading text-capitalize text-center">About Us</h3>
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
                <div class="row">
                    {!!$setting->aboutus!!}
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- müşteri yorumları için buraya bir alan eklenmeli!! db den çekilecek buraya tablo şeklinde koyulabilir! -->

    <!-- Comment
    <section class="contact py-5">
        <div class="container py-lg-5">
            <div class="row agile-contact-form">
                <div class="col-md-12 mt-md-0 mt-12 contact-form-right">
                    <div class="contact-form-top">
                        <h3>Comments</h3>
                    </div>
                    <div class="agileinfo-contact-form-grid">
                        <form action="#" method="post">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="text" name="Subject" placeholder="Subject" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <textarea name="Message" placeholder="Message" required=""></textarea>
                            <button class="btn1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    //Comment -->


    <!-- counter -->
    <div class="services-bottom stats py-5">
        <div class="container py-lg-5 pb-3">
            <h2 class="heading text-capitalize text-center">Our Stats</h2>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div class="row wthree-agile-counter">
                <div class="col-sm-3 col-6 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="fa fa-taxi" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">324</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>No: of Cabs</h4>
                    </div>
                </div>
                <div class="col-sm-3 col-6 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="fa fa-road" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">543</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>Cab Routes</h4>
                    </div>
                </div>
                <div class="col-sm-3 col-6 mt-sm-0 mt-5 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="fas fa-money-bill-alt" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">434</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>Low Fares</h4>
                    </div>
                </div>
                <div class="col-sm-3 col-6 mt-sm-0 mt-5 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">234</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>24/7 Service</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //counter -->

    <!-- Cars slider -->
    <section class="food-Slider py-5">
        <div class="container py-lg-5">
            <h3 class="heading text-capitalize text-center">Our Vehicles</h3>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 slidering">
                                <div class="thumbnail"><img src="{{asset('assets')}}/images/1.png" alt="Image" style="max-width:100%;"></div>
                                <h5 class="my-2 text-center text-uppercase">Private Vehicle Sprinter </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 slidering">
                                <div class="thumbnail"><img src="{{asset('assets')}}/images/2.png" alt="Image" style="max-width:100%;"></div>
                                <h5 class="my-2 text-center text-uppercase">Private Vehicle Mercedes Vito </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 slidering">
                                <div class="thumbnail"><img src="{{asset('assets')}}/images/3.png" alt="Image" style="max-width:100%;"></div>
                                <h5 class="my-2 text-center text-uppercase">Private Vehicle Midibus </h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 slidering">
                                <div class="thumbnail"><img src="{{asset('assets')}}/images/4.png" alt="Image" style="max-width:100%;"></div>
                                <h5 class="my-2 text-center text-uppercase">Limousine </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 slidering">
                                <div class="thumbnail"><img src="{{asset('assets')}}/images/5.png" alt="Image" style="max-width:100%;"></div>
                                <h5 class="my-2 text-center text-uppercase">Private Vehicle Bus </h5>
                            </div>
                            <div class="col-md-4 col-sm-6 slidering">
                                <div class="thumbnail"><img src="{{asset('assets')}}/images/2.png" alt="Image" style="max-width:100%;"></div>
                                <h5 class="my-2 text-center text-uppercase">Private Vehicle Mercedes Vito </h5>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- //Cars slider -->

    <!-- booking -->
    <section class="container py-3">
        <div class="booking text-center p-sm-5 py-5 px-3">
            <h3>Book your vehicle Now</h3>
            <p class="my-4">Reach Your Destination </p>
            <a href="{{route('booking')}}">Book Now</a>
        </div>
    </section>
    <!-- booking -->

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


@endsection
