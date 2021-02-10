@extends('layouts.home')

@section('title') {{ $setting -> title}} @endsection
@section('description') {{ $setting -> description}} @endsection
@section('keywords') {{ $setting -> keywords}} @endsection
@section('content')

    <!--FAQ-->
    <div class="container py-lg-5">
        <div class="col">
            <h1 class="heading text-capitalize text-center">FAQ</h1>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-6">
                <br>
                <h6><b>What can I do if I have trouble making a reservation?</b></h6>
                <br>
                <p>If you communicate with us and provide all the necessary information for booking, we can make your reservation and send your ticket to your e-mail address.</p>
                <br>
                <h6><b>How do I know if my reservation is approved?</b></h6>
                <br>
                <p>Your reservation will be confirmed within 12 hours and an Order Confirmation Mail will be sent to you. Please make sure your order is confirmed.</p>
                <br>
                <h6><b>When booking from the hotel to the airport, how do I determine the time of arrival?</b></h6>
                <br>
                <p>When making a reservation, first write your departure time and then specify the time you would like to receive from the hotel. It is recommended that you stay at the airport at least 2 hours before your flight on international flights and 1.5 hours before domestic flights. Specify the time you want to receive by including this period of transportation time. (If there is a problem at your reception time, we will make the necessary changes by returning to you.)</p>
                <br>
                <h6><b>What should I do for the baby & child seat or seat elevator request?</b></h6>
                <br>
                <p>You can choose the number of "Baby / Child Seat" during the booking process and you can write the age of your child and the type of seat you want in the "Note" box on the booking form.</p>
                <br>
                <h6><b>What should I do if I have extra luggage outside the suitcase and bag?</b></h6>
                <br>
                <p>You need to specify the type and size of your baggage in the "Your note" box on the booking form. Necessary information will be given when your reservation is confirmed.</p>
                <br>
                <h6><b>What should I do if I have pets?</b></h6>
                <br>
                <p>In the "Notation" box on the reservation form, you need to specify the type of your pet and the size of the cage. Necessary information will be given when your reservation is confirmed.</p>
                <br>
                <h5><b>Frequently Asked Questions About Reception and Transfer at the Airport</b></h5>
                <br>
                <h6><b>How do I find you at the airport?</b></h6>
                <br>
                <p>Our staff will meet you at the terminal gate with Antalya Airport Transfer .com written sign. Extra details about the welcome are written in your confidential email.</p>
                <br>
                <h6><b>What should I do if I take baggage at the airport for a long time?</b></h6>
                <br>
                <p>In case of delay, please inform us using one of our communication channels.</p>
                <br>
                <p><b>* You can request a break for an urgent need during the transfer.</b></p>
                <br>
                <p><b>* It is prohibited to smoke cigarettes, tobacco products and electronic cigarettes in vehicles.</b></p>
                <br>
            </div>
        </div>
    </div>
    <!--FAQ-->

@endsection
