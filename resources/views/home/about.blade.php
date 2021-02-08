@extends('layouts.home')

@section('title', 'About Us -' . $setting -> title)
@section('description', $setting -> description)
@section('keywords', $setting -> keywords)
@section('content')

    <section class="services py-5">
        <div class="container py-lg-5">
            <h1 class="heading text-capitalize text-center">About Us</h1>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
        </div>
        <div class="container ">
            <div class="row">

                {!!$setting->aboutus!!}

            </div>
        </div>
    </section>

@endsection
