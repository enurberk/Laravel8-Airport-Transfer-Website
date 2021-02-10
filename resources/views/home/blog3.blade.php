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
                        <img src="{{asset('assets')}}/images/timthumb3.jpg" style="width: 100%;" alt="image">
                    </div>
                    </a>
                    <div class="blog-item-content">
                        <span class="date"> </span>
                        <h4 class="mt-3 mb-3">İstanbul Atatürk Airport Transfer</h4>
                        <p class="mb-4">
                            For many years, Istanbul had two airports, one is Atatürk Airport and the other is Sabiha Gökçen Airport.
                            However, a new airport is constructed and opened in April 2019 in European side of the Istanbul, and this
                            new airport is called Istanbul Airport. It is located at the Black Sea coast is very far from city centres
                            of Istanbul. Some passengers may wonder whether there are two or three airports in Istanbul currently.
                            <br>
                            <br>
                            The answer is that Istanbul has two running airports currently. This is because Atatürk Airport is closed
                            after the construction of Istanbul Airport and all the flights, offices and other services that Atatürk Airport
                            had is transferred to the new Istanbul Airport. One problem with Istanbul Airport is that it doesn’t have access
                            to a subway train while Atatürk Airport had. Therefore, some passengers may have trouble arriving to the new Istanbul Airport.
                            <br>
                            <br>
                            But this is exactly the reason we’re working too hard as Istanbul Shuttle Port team. Just like we worked more
                            than 10 years to help you arrive to any location from the airports in Istanbul or vice versa, we now work in
                            order to make you arrive to Istanbul Airport or from Istanbul Airport. Our Istanbul Atatürk Airport transfer
                            service is safe and easily accessible.
                            <br>
                            <br>
                            Thus, if you worry about the difficult transportation methods from the new Istanbul Airport, you don’t need to
                            when you book a ride with us. It is possible to choose our private taxi car, or you can also use İstanbul Atatürk
                            Airport shuttle which is shared with other customers.
                            <br>
                            <br>
                            Both service is very fast because we work as an experienced team and our drivers have full knowledge of ways and
                            traffic of Istanbul. Throughout the ride, you don’t need to try for anything because we’ll handle everything for you.
                            All you need to do is relaxing after an exhausting flight and enjoy your trip in an exclusive Istanbul Atatürk Airport
                            VIP taxi car.
                            <br>
                            <br>
                            You should also note that even if there are less ways for transportation from the new airport, we don’t charge you
                            with unfair prices on no account. All of our prices are fixed, and the customer is informed about the price before the
                            ride. The high amount of positive feedback messages from our customers shows that our service has a high price / performance
                            ratio. We are always with you with our corporate structure aiming to provide 24/7 service.

                        </p>

                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <!--Content-->

@endsection
