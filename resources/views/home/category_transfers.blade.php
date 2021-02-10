@extends('layouts.home')

@section('title') {{ $data -> title . " Transfer List"}} @endsection
@section('description') {{ $data -> description}} @endsection
@section('keywords') {{ $data -> keywords}} @endsection
@section('content')

    <!-- Car-->
    <div class="container py-lg-5">
        <h3 class="heading text-capitalize text-center">{{ $data -> title }} Category List</h3><br>
        @foreach($datalist as $rs)
            <!-- Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                   <a> <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="Image" style="max-width:100%;">
                </div>
                <h5 class="my-2 text-center text-uppercase">{{$rs->title}}</h5>
                <h5 class="heading mb-3 text-center">{{$rs->description}}</h5>
                <a href="{{route('booking')}}">Book Now </a>
            </div>
            @endforeach
    </div>

    <!-- Car-->

@endsection
