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
                            <h1>{{ $rs->title }}</h1>
                            <h2 class="mb-5"><i class="fas fa-money-bill-alt"></i> {{$rs->base_price}} TL</h2>
                            <a href="{{route('transfer', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">Book Now </a>
                        </div>
                    </div>

            </li>
            @endforeach
        </ul>
        </div>
    </div>
</div>
<!-- //banner -->
