@extends('layouts.home')

@section('title')
@section('description')
@section('keywords')
@section('content')

    <section class="services py-5">
        <div class="container py-lg-5">
            <h1 class="heading text-capitalize text-center">Our Services</h1>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
        </div>
        <div class="container ">
            <div class="row">
                <!-- Sidebar-Left Menu -->
                <div id="sidebar-left" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <!-- Small table -->
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- table -->
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Transfer Id</th>
                                    <th>Vehicle</th>
                                    <th>Pick Up Location</th>
                                    <th>Drop Off Location</th>
                                    <th>Price</th>
                                    <th>Pick Up Date</th>
                                    <th>Pick Up Time</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs -> user -> name}}</td>
                                        <td>{{$rs -> user -> email}}</td>
                                        <td>{{$rs -> user -> phone}}</td>
                                        <td>{{$rs -> user -> address}}</td>
                                        <td>{{$rs -> transfer_id}}</td>
                                        <td>{{$rs -> transfer -> title}}</td>
                                        <td>{{$rs -> pick_up_location}}</td>
                                        <td>{{$rs -> drop_off_location}}</td>
                                        <td>{{$rs -> price}}</td>
                                        <td>{{$rs -> pick_up_date}}</td>
                                        <td>{{$rs -> pick_up_time}}</td>
                                        <td>{{$rs -> status}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </section>

@endsection
