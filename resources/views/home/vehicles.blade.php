@extends('layouts.home')

@section('title') {{ $setting -> title}} @endsection
@section('description') {{ $setting -> description}} @endsection
@section('keywords') {{ $setting -> keywords}} @endsection
@section('content')

    <!-- Car-->
    <div class="container py-lg-5">
        <h5 class="heading mb-3 text-center">We have thought everything for your comfort</h5>
        <h3 class="heading text-capitalize text-center">Our Vehicles</h3><br>
        <h5 class="heading mb-5 text-center">The internal equipment of our vehicle fleet has been designed carefully for you,
            our valuable guests. You can enjoy safe and comfortable travels on our vehicles. Select the vehicle suitable for you
            and enjoy your travel.</h5>

        <div class="row">
            <!--1. Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="{{asset('assets')}}/images/1.png" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">Mercedes Sprinter </h5>
                <h5 class="heading mb-3 text-center">Mercedes Sprinter 1 - 8 Persons / 1 - 8 Baggage</h5>
                <a href="{{route('booking')}}">Book Now </a>
            </div>
            <!--2. Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="{{asset('assets')}}/images/2.png" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">Mercedes Vito </h5>
                <h5 class="heading mb-3 text-center">Mercedes Vito 1 - 4 Persons / 1 - 4 Baggage</h5>
                <a href="{{route('booking')}}">Book Now </a>
            </div>
        </div>

        <div class="row">
            <!--3. Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="{{asset('assets')}}/images/3.png" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">Midibus </h5>
                <h5 class="heading mb-3 text-center">Midibus 1 - 24 Persons / 1 - 24 Baggage</h5>
                <a href="{{route('booking')}}">Book Now </a>
            </div>
            <!--4. Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="{{asset('assets')}}/images/4.png" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">Limousine </h5>
                <h5 class="heading mb-3 text-center">The details and class of our limousine vehicles will be informed upon your request.</h5>
                <a href="{{route('booking')}}">Book Now </a>
            </div>
        </div>

        <div class="row">
            <!--5. Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="{{asset('assets')}}/images/5.png" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">Bus </h5>
                <h5 class="heading mb-3 text-center">Private Bus 1 - 46 Persons / 1 - 52 Baggage</h5>
                <a href="{{route('booking')}}">Book Now </a>
            </div>
            <!--6. Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="{{asset('assets')}}/images/6.png" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">Mercedes C200 4Matic </h5>
                <h5 class="heading mb-3 text-center">Mercedes C200 1 - 3 Persons / 1 - 3 Baggage</h5>
                <a href="{{route('booking')}}">Book Now </a>
            </div>
        </div>


        <div class="row">
            <!--7. Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <img src="{{asset('assets')}}/images/7.png" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">Chevrolet Trax </h5>
                <h5 class="heading mb-3 text-center">Chevrolet Trax 1 - 4 Persons / 1 - 4 Baggage</h5>
                <a href="{{route('vehicles')}}">Book Now </a>
            </div>
        </div>

    </div>

    <!-- Car-->

@endsection
