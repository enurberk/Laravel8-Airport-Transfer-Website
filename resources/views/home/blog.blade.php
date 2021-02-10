@extends('layouts.home')

@section('title') {{ $setting -> title}} @endsection
@section('description') {{ $setting -> description}} @endsection
@section('keywords') {{ $setting -> keywords}} @endsection
@section('content')


    <section class="services py-5">
        <div class="container py-lg-5">
            <h1 class="heading text-capitalize text-center">Blog</h1>
        </div>
        <div class="container ">
            <div class="row">

                {!!$setting->blog!!}

            </div>
        </div>
    </section>

@endsection
