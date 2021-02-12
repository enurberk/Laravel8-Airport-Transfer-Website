@extends('layouts.home')

@section('title', 'Booking Form')
@section('content')
    @auth <!--user değilse booking formu açamaz! -->
    <!-- Booking-->
    <section class="bookingform py-5">
        <div class="container py-md-5 py-3">
            <h1 class="heading text-capitalize text-center">Booking form</h1>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
            <div class="row">
                <div class="col-lg-6 book-appointment p-sm-5 py-5 px-4">
                    <h2>Personal Details</h2>
                    <div class="book-agileinfo-form">
                        <form action="{{route('user_rezervation_store')}}" method="post">
                            @csrf
                            <div class="row main-agile-sectns">
                                <div class="col-md-6 agileits-btm-spc form-text1">
                                    <input type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="Full Name" required="">
                                </div>
                                <div class="col-md-6 agileits-btm-spc form-text2">
                                    <input type="text" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" placeholder="Phone" required="">
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 agileits-btm-spc form-text1">
                                    <input type="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <div class="agileits-btm-spc">
                                        <select name="transfer_id" id="cab" onchange="change_country(this.value)" class="frm-field required sect">
                                            @foreach($transfers as $rs)
                                                <option value="{{$rs->id}}">{{$rs->title}} / Price: {{$data->price = $rs->base_price + $rs->km_price}} TL</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <h2 class="sub-head-w3ls">Booking Details</h2>
                            <div class="row main-agile-sectns">
                                <div class="col-md-6 agileits-btm-spc form-text1">
                                    <input id="datepicker" name="pick_up_date" type="text" placeholder="Pick-up Date(yyyy/mm/dd)" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd';}"
                                           required="">
                                </div>
                                <div class="col-md-6 agileits-btm-spc form-text2">
                                    <input type="text" id="timepicker" name="pick_up_time" class="timepicker form-control" placeholder="Pick-up Time" value="">
                                </div>
                            </div>
                            <div class="row main-agile-sectns">
                                <div class="col-md-6 agileits-btm-spc form-text1">
                                    <input type="text" name="pick_up_location" placeholder="Pick-up Location" required="">
                                </div>
                                <div class="col-md-6 agileits-btm-spc form-text2">
                                    <input type="text" name="drop_off_location" placeholder="Drop-off Location" required="">
                                </div>
                            </div>

                            <input type="submit" value="Book Now">
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-5">
                    <img src="{{asset('assets')}}/images/car1.png" alt="" class="img-fluid" />
                    <img src="{{asset('assets')}}/images/car2.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!--//Booking -->
    @endauth
@endsection
