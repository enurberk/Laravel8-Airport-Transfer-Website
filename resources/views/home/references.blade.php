@extends('layouts.home')

@section('title', 'References -' . $setting -> title)
@section('description', $setting -> description)
@section('keywords', $setting -> keywords)
@section('content')

    <section class="services py-5">
        <div class="container py-lg-5">
            <h1 class="heading text-capitalize text-center">References</h1>
            <h5 class="heading mb-5 text-center">Our University References</h5>
        </div>
        <div class="container ">
            <div class="row">

                {!!$setting->references!!}

            </div>
        </div>
    </section>

@endsection
