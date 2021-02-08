@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}"> Home </a></li>
            <li><a href="#"> Blank </a></li>
        </ul>
    </div>
</div>
    <section class="services py-5">
        <!--
        <div class="container py-lg-5">
            <h1 class="heading text-capitalize text-center">Our Services</h1>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
        </div>
        -->
        <div class="container ">
            <div class="row">
                <!-- Sidebar-Left Menu -->
                <div id="sidebar-left" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <!-- /Sidebar-Left Menu -->
                <!-- Main -->
                <div id="side" class="col-md-10">
                    @include('profile.show')
                </div>
                <!-- Main -->
            </div>
        </div>
    </section>

@endsection
