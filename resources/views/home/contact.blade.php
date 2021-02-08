@extends('layouts.home')

@section('title', 'Contact -' . $setting -> title)
@section('description', $setting -> description)
@section('keywords', $setting -> keywords)
@section('content')

    <section class="services py-5">
        <div class="container py-lg-5">
            <h1 class="heading text-capitalize text-center">Contact</h1>
            <h5 class="heading mb-5 text-center">Transfer Service</h5>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-md-6 contact-form-left map">
                    <div class="w3layouts-contact-form-top">
                        <div class="contact-form-top">
                            <h3>Locate Us</h3>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381268.89304075!2d-108.26956901768942!3d34.145820117962906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1524478277945" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-md-6 mt-md-0 mt-4 contact-form-right">
                    <div class="contact-form-top">
                        <h3>Send us a message</h3>
                    </div>
                    <div class="agileinfo-contact-form-grid">
                        @include('home.message')
                        <form action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Name & Surname" required="">
                            <input type="text" name="phone" placeholder="Phone Number" required="">
                            <input type="text" name="email" placeholder="Email" required="">
                            <input type="text" name="subject" placeholder="Subject" required="">
                            <textarea name="message" placeholder="Your Message" required=""></textarea>
                            <button type="submit" class="btn1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form-top">
                        <h3>Contact Us</h3>
                    </div>
                    {!!$setting->contact!!}
                </div>
            </div>
        </div>
    </section>

@endsection
