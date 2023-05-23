@extends('layout')



@section('content')

<!-- Begin Main Content Area -->
<main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="/webApp/assets/images/breadcrumb/bg/1920x373.png">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h2 class="breadcrumb-heading">Contact Us</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home <i class="pe-7s-angle-right"></i></a>
                                    </li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin Shipping Area -->
            <div class="shipping-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="/webApp/assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h5 class="title">Free Shipping</h5>
                                    <p class="short-desc mb-0">Free Home Delivery Offer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="/webApp/assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h5 class="title">Online Support</h5>
                                    <p class="short-desc mb-0">24/7 Online Support Provide</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="/webApp/assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h5 class="title">Secure Payment</h5>
                                    <p class="short-desc mb-0">Fully Secure Payment System</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shipping Area End Here -->

            <div class="contact-with-map">
                <div class="contact-map">
                    <iframe class="contact-map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="contact-form-area section-space-bottom-100">
                    <div class="container">
                        <div class="contact-form-wrap">
                            <form id="contact-form" class="contact-form" action="https://whizthemes.com/mail-php/mamunur/harmic/harmic.php">
                                <h4 class="contact-form-title pb-2 mb-7">Send Us a Massage</h4>
                                <div class="form-field">
                                    <input type="text" name="con_name" placeholder="Name*" class="input-field">
                                </div>
                                <div class="form-field mt-6">
                                    <input type="text" name="con_email" placeholder="Email*" class="input-field">
                                </div>
                                <div class="form-field mt-6">
                                    <textarea name="con_message" placeholder="Message" class="textarea-field"></textarea>
                                </div>
                                <div class="button-wrap mt-8">
                                    <button type="submit" value="submit" class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" name="submit">Post Message</button>
                                </div>
                                <p class="form-messege mt-3 mb-0"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
        @endsection