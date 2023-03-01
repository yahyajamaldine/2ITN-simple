@extends('layouts.master')

@section('content')
    <div class="atf-page-heading atf-size-md atf-dynamic-bg" data-src="assets/img/bg/1.jpg">
        <div class="container">
            <div class="atf-page-heading-in">
                <h1 class="atf-page-heading-title">Get In Touch</h1>
                <ol class="breadcrumb">
                    <li><a href="404.html" class="fa fa-home"></a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="blog.html">Web</a></li>
                    <li class="active">404</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end-page-heading -->


    <!--=================================================================================
                                Start Contact Area
    ==================================================================================-->
    <section id="contact" class="atf-contact-area atf-section-padding bg-f6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-section-title">
                        <h2 class="atf-title-color">Our <span>Contact</span> Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis
                            notruexercit dolor sit amet eget.</p>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->

            <div class="row mt-5 pt-4">
                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="atf-contact-address">
                        <div class="atf-contact-icon">
                            <i class="icofont-google-map"></i>
                        </div>
                        <div class="atf-contact-phone">
                            <h4>Our Home Address</h4>
                            <p><a href="#">Canada Place, <br> Sidney, BC, Canada</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-contact-address">
                        <div class="atf-contact-icon">
                            <i class="icofont-envelope"></i>
                        </div>
                        <div class="atf-contact-phone">
                            <h4>Our Email Address</h4>
                            <p><a href="#">info@business.com</a></p>
                            <p><a href="#">support@business.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="atf-contact-address">
                        <div class="atf-contact-icon">
                            <i class="icofont-phone"></i>
                        </div>
                        <div class="atf-contact-phone">
                            <h4>Our Phone</h4>
                            <p><a href="#">+1 (424) 652-5294</a></p>
                            <p><a href="#">+1 (424) 652-5282.</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay=".2s">
                    <!-- <form id="contactForm"> -->
                    <form id="contact-form" action="mail.php" method="post" class="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your name" required="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id="email_1"
                                        placeholder="Your Email" autocomplete="off" required="">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="Your Phone" autocomplete="off" required="">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="4" id="message"
                                        placeholder="Enter your message" autocomplete="off" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="atf-hero-btn ">
                                    <button type="submit" class="atf-main-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--Result notification -->
                    <div id="error-message" class="text-left mt-3"></div>
                    <div id="form-messages" class="text-left mt-3"></div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <!-- Google Map start-->
                    <div class="atf-google-map mt-md-40">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.764530126784!2d90.37238931424376!3d23.755774894489523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf534c0809ff%3A0xab142c55845030d2!2sEducationUSA%20Advising%20Center!5e0!3m2!1sen!2sbd!4v1672504311283!5m2!1sen!2sbd"></iframe>
                    </div>
                    <!-- Google Map end -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->



    <!--=================================================================================
         START Mailchamp
    ==================================================================================-->
    <section id="mailchamp" class="atf-mailchamp-area atf-section-padding">
        <div class="container">
            <div class="row align-items-center bg-overlay justify-content-start atf-single-mailchamp atf-dynamic-bg atf-bg atf-section-padding"
                data-src="assets/img/bg/2.jpg">
                <div class="col-lg-6 col-md-6 col-12 text-start">
                    <!-- Newsletter title -->
                    <div class="atf-mailchame-content">
                        <h2>Our Newsletter to Subscribe</h2>
                        <p class="color-white pe-lg-3">Dantes remained confused and silent by this explanation of the,
                            consectetur adipisic elit,</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 text-center">
                    <div class="subscribe-form">
                        <div class="subscribe-form-inner mt-5">
                            <!-- Newsletter form -->
                            <form class="form-inline dv-form" id="mc-form">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Your Email" required="required">
                                    <div class="atf-hero-btn">
                                        <button class="atf-main-btn btn" name="Subscribe" id="subscribe-btn"
                                            type="submit">Submit</button>
                                    </div>
                                </div>
                                <br>
                                <label class="atf-subscription-label" for="email"></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mailchamp -->
@endsection
