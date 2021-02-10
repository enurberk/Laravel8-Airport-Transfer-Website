<!-- banner-text -->
<div id="wrapper">

    <!-- Slideshow 1 -->
    <div class="rslides_container">
        <ul class="rslides" id="slider1">
            @foreach($slider as $rs)
            <li>
                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 650px">
                    <div class="bs-slider-overlay">
                        <div class="banner-info text-center">
                            <span class="fas fa-taxi"></span>
<<<<<<< HEAD
                            <h1>24/7 Airport Transfer Service </h1>
                            <h2 class="mb-5"><i class="fas fa-phone"></i> 12(00) 123 1234</h2>
                            <a href="{{route('booking')}}">Book Now </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-img one">
                    <div class="bs-slider-overlay">
                        <div class="banner-info text-center">
                            <span class="fas fa-taxi"></span>
                            <h4>Online Transfer Booking</h4>
                            <h5 class="mb-5">No Extra Charges</h5>
                            <a href="{{route('booking')}}">Book Now </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-img two">
                    <div class="bs-slider-overlay">
                        <div class="banner-info text-center">
                            <span class="fas fa-taxi"></span>
                            <h4>Reach Your Destination</h4>
                            <h5 class="mb-5">Within Exact Time </h5>
                            <a href="{{route('booking')}}">Book Now </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-img three">
                    <div class="bs-slider-overlay">
                        <div class="banner-info text-center">
                            <span class="fas fa-taxi"></span>
                            <h4>Travel Safe & Secure</h4>
                            <h5 class="mb-5">Assured Transfer Service</h5>
                            <a href="{{route('booking')}}">Book Now </a>
                        </div>
                    </div>
                </div>
            </li>
=======
                            <h1>{{ $rs->title }}</h1>
                            <h2 class="mb-5"><i class="fas fa-money-bill-alt"></i> {{$rs->base_price}} TL</h2>
                            <a href="{{route('transfer', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">Book Now </a>
                        </div>
                    </div>
>>>>>>> c9f2bd1f86bd9d04cb975e536bad5c8addf511cf

            </li>
            @endforeach
        </ul>
        </div>
    </div>
</div>
<!-- //banner -->
