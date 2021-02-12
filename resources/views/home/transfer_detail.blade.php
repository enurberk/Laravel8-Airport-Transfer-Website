@extends('layouts.home')

@section('title') {{ $data -> title}} @endsection
@section('description') {{ $data -> description}} @endsection
@section('keywords') {{ $data -> keywords}} @endsection
@section('content')

    <!-- Car-->
    <div class="container py-lg-5">
        <h3 class="heading text-capitalize text-center">{{ $data -> title }} Details</h3><br>

        <!-- Car Info-->
            <div class="col-md-6 col-sm-6 text-center">
                <div class="thumbnail">
                    <a> <img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}" alt="Image" style="max-width:100%;"></a>
                </div>
                @foreach($datalist as $rs)
                <div class="thumbnail">
                    <a> <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt="Image" style="max-width:100%;"></a>
                </div>
                @endforeach
                <h5 class="my-2 text-center text-uppercase">{{$data->title}}</h5>
                <h5 class="heading mb-3 text-center" ><strong>Description:</strong> {{$data->description}}</h5>
                <h5 class="heading mb-3 text-center" ><strong>Price :</strong> {{$data->base_price}} TL </h5>
                <a href="{{route('user_rezervation_add')}}">Book Now </a>
            </div>

    </div>
    <!-- Car-->

@endsection
