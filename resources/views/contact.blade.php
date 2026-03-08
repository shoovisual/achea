@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')

@include('components.header')

<!-- Contact Area Start -->
<div id="contact-area" class="contact-area section pt-120 pb-120" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="contact-wrapper" style="background: #fff; padding: 60px; border-radius: 8px; box-shadow: 0 5px 30px rgba(0,0,0,0.05);">
            <div class="row justify-content-center mb-50">
                <div class="col-12 text-center">
                    <h2 style="font-weight: 700; color: #444; font-size: 36px; margin-bottom: 50px;">Contact Us</h2>
                </div>
            </div>

            <div class="row align-items-center">
                <!-- Contact Info -->
                <div class="col-lg-5 offset-lg-1 col-md-6 col-12 mb-50">
                    <div class="contact-info-item mb-40 d-flex align-items-start">
                        <div class="icon" style="min-width: 50px; height: 50px; line-height: 50px; text-align: center; border-radius: 50%; color: #ff9f6f; font-size: 24px; margin-right: 20px;">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h4 style="font-size: 18px; font-weight: 700; color: #333; margin-bottom: 5px;">Call</h4>
                            <p style="color: #666; font-size: 15px; margin: 0;">+255 713 130 507</p>
                        </div>
                    </div>

                    <div class="contact-info-item mb-40 d-flex align-items-start">
                        <div class="icon" style="min-width: 50px; height: 50px; line-height: 50px; text-align: center; border-radius: 50%; color: #ff9f6f; font-size: 24px; margin-right: 20px;">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h4 style="font-size: 18px; font-weight: 700; color: #333; margin-bottom: 5px;">Email</h4>
                            <p style="color: #666; font-size: 15px; margin: 0;">info@achea.or.tz</p>
                        </div>
                    </div>

                    <div class="contact-info-item d-flex align-items-start">
                        <div class="icon" style="min-width: 50px; height: 50px; line-height: 50px; text-align: center; border-radius: 50%; color: #ff9f6f; font-size: 24px; margin-right: 20px;">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h4 style="font-size: 18px; font-weight: 700; color: #333; margin-bottom: 5px;">Location</h4>
                            <p style="color: #666; font-size: 15px; margin: 0;">Dar es Salaam, Tanzania</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="contact-form">
                        <form id="contact-form" action="#" method="post">
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label for="name" style="font-size: 14px; color: #666; font-weight: 500; margin-bottom: 8px; display: block;">Name</label>
                                    <input type="text" name="name" id="name" style="width: 100%; height: 50px; border: 1px solid #eee; background: #fff; padding: 0 20px; border-radius: 4px; font-size: 14px; outline: none;">
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="email" style="font-size: 14px; color: #666; font-weight: 500; margin-bottom: 8px; display: block;">Email address</label>
                                    <input type="email" name="email" id="email" style="width: 100%; height: 50px; border: 1px solid #eee; background: #fff; padding: 0 20px; border-radius: 4px; font-size: 14px; outline: none;">
                                </div>
                                <div class="col-12 mb-30">
                                    <label for="message" style="font-size: 14px; color: #666; font-weight: 500; margin-bottom: 8px; display: block;">Message</label>
                                    <textarea name="message" id="message" style="width: 100%; height: 120px; border: 1px solid #eee; background: #fff; padding: 15px 20px; border-radius: 4px; font-size: 14px; outline: none; resize: none;"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" style="width: 100%; height: 50px; border: none; background: #ff9f6f; color: #fff; font-size: 14px; font-weight: 600; text-transform: uppercase; border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">SEND NOW</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

<!-- Map Area Start -->
<div class="contact-map-area section">
    <div id="contact-map" class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.270674488965!2d36.817223!3d-1.286389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d22f28f001%3A0x269d0f419958700c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1648045618000!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!-- Map Area End -->

@endsection
