@extends('layouts.home')

@section('title', ',Contact -' . $setting -> title)
@section('description', $setting -> description)
@section('keywords', $setting -> keywords)
@section('content')

    <section class="services py-5">
        <div class="container py-lg-5">
            <h1 class="heading text-capitalize text-center">Contact</h1>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
        </div>
        <div class="container ">
            <div class="row">

                {!!$setting->contact!!}

            </div>
        </div>
    </section>

@endsection
