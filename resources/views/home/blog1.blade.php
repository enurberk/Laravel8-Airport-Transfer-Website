@extends('layouts.home')

@section('title') {{ $setting -> title}} @endsection
@section('description') {{ $setting -> description}} @endsection
@section('keywords') {{ $setting -> keywords}} @endsection
@section('content')

    <!--Content-->
    <br>
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="blog-list-item">
                    <div class="blog-item-img mb-3 hover-effect">
                        <img src="{{asset('assets')}}/images/timthumb1.jpg" style="width: 100%;" alt="image">
                    </div>
                    </a>
                    <div class="blog-item-content">
                        <span class="date"> </span>
                        <h4 class="mt-3 mb-3">Sabiha Gökçen Airport Transfer Service</h4>
                        <p class="mb-4">	If your plane to Istanbul lands to Sabiha Gökçen Airport and you are worried about the transportation from the
                            airport to the city centres of Istanbul, you don’t have to be worried. With our Sabiha Gökçen Airport Shuttle service, your trip
                            to the city centres will be the best taxi trip.
                            <br>
                            <br>
                            After you use our İstanbul SAW Transfer booking system and book a trip with us, there is nothing more you need to do.
                            After leaving the airport, our personnel will take you and guide you to the Sabiha Gökçen VIP Taxi. In this specially
                            designed car, you will be comfortable, as well as your suitcases and other personal belongings will be safe. Our smiling
                            drivers are always ready to take you to the place you want to go whether it’s the city centres of Istanbul or not.
                            <br>
                            <br>
                            We offer a taxi trip to every place of Istanbul, as well as outside the city of Istanbul. In this way, we provide you easy
                            access to convenient and comfortable transportation. That is, you can also book a trip from Istanbul SAW Airport to Tekirdağ,
                            Bursa, Kocaeli, or Zonguldak. You can think this as any trip from Istanbul Airport to city you wish to go. If you want to book
                            a trip and don’t know how to do it, you can contact us any time.
                            <br>
                            <br>
                            In addition to this, we as Istanbul Shuttle Port, have an office in Sabiha Gökçen Airport transfer centre which is ready
                            for service throughout the day in every day of the week. You can also come to our office and we will do the best to help
                            you with reasonable prices and an exclusive service. We would like to emphasize that your trip will be exclusively VIP and
                            the taxi for your trip will ready for use 7/24. We will make sure that you will not wait for your taxi because we know that
                            waiting may be very boring most of the time.
                            <br>
                            <br>
                            You can get additional information by visiting our website or by visiting our office in Sabiha Gökçen Airport. We guarantee
                            that you will experience the best taxi transfer trip with our Sabiha Gökçen Airport transfer service because we believe in
                            helping our customers. We believe that when you land to the airport in Istanbul, your transfer will be very easy with our help.
                            We, as Istanbul Shuttle Port, are ready for it 7/24.

                        </p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <!--Content-->

@endsection
