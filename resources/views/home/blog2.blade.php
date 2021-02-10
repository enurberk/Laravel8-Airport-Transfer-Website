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
                        <img src="{{asset('assets')}}/images/timthumb2.jpg" style="width: 100%;" alt="image">
                    </div>
                    </a>
                    <div class="blog-item-content">
                        <span class="date"> </span>
                        <h4 class="mt-3 mb-3">İstanbul Taxi, Bus and Shuttle Services</h4>
                        <p class="mb-4">	You may already heard of some news about taxis requiring unfair high prices from their customers in
                            the airports in Istanbul, especially from tourists. It is very natural that if you are a tourist, then you may be worried
                            about these situations. As the team of Istanbul Shuttle Port, we understand you if you feel worried and we are only here
                            to help you.
                            <br>
                            <br>
                            We are a completely tourist friendly company which are always working to make you get a fair and high quality service.
                            Thus, if you are worried about the unfair prices that taxis impose in Istanbul, you can prefer our İstanbul Taxi - Bus and
                            Shuttle service with a mind at peace. Our İstanbul taxi fares are affordable, cheap considered to our high quality standards
                            and most importantly, it is fixed.
                            <br>
                            <br>
                            By fixing our prices, we want to make sure that you will not pay more than what is told to you before the taxi ride.
                            In addition to this, we have many ways of payment. You can choose any payment method before arranging your taxi ride.
                            <br>
                            <br>
                            One payment option is the paid in advance method which is made with credit card. So, you can pay before your ride with
                            your credit card in order not to deal with payment issues during your trip. You should note that all of our payment methods
                            are done in world standards and it is completely safe. Another option for payment is 30% prepaid method where you pay 30%
                            of the total amount in advance and pay the rest during your ride.
                            <br>
                            <br>
                            This is our most preferable method because it is comprehendible and reasonable. In addition, you can choose the payment
                            during ride method. With this method, you can pay all of the amount during your ride, so that you won’t be paying any money
                            before your trip. In all of the payment methods, you can use your credit card, that is, we accept the payment with credit
                            card in the taxi. This is because we believe in a service which is effortless for the customer.
                            <br>
                            <br>
                            As an alternative service to the banned UBER taxi İstanbul service, whether you want to use İstanbul Airport transfer
                            service or Sabiha Gökçen Airport transfer service, we are ready to make you experience a superior taxi ride where you
                            have many payment options with credit card. We are always with you with our corporate structure aiming to provide 24/7 service.

                        </p>

                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <!--Content-->


@endsection
