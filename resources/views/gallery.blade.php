@extends('layouts.master')

@section('content')
    <div class="atf-page-heading atf-size-md atf-dynamic-bg" data-src="assets/img/bg/1.jpg">
        <div class="container">
            <div class="atf-page-heading-in">
                <h1 class="atf-page-heading-title">Our Gallery</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html" class="fa fa-home"></a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="blog.html">Web</a></li>
                    <li class="active">Gallery Details</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end-page-heading -->


    <!-- START PORTFOLIO -->
    <section id="portfolio" class="atf-portfolio-area  atf-section-padding bg-f6">
        <div class="container">
            <div class="row justify-content-start align-items-center md_btn_fixing">
                <div class="col-lg-6 col-md-6 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-section-title">
                        <h2 class="atf-title-color border-left ps-3">Our <span>Gallery</span></h2>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-6 col-md-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-hero-btn text-end">
                        <a href="#course" class="atf-main-btn">View All Gallery</a>
                    </div>
                </div>
                <!--- END COL -->

            </div>
            <!--- END ROW -->


            <div class="row mt-5 pt-4">
                <div class="col-lg-12">
                    <div id="gallery-slider" class="owl-carousel owl-theme atf-main-testimonials">
                        <div class="portfolio">
                            <img src="assets/img/portfolio/1.jpg" alt="Portfolio">
                            <div class="portfolio-content">
                                <ul class="icon">
                                    <li><a href="assets/img/portfolio/1.jpg" data-rel="lightcase:myCollection"><i
                                                class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h3 class="title">English</h3>
                                <span class="post">Comming Soon June 30,2023</span>
                            </div>
                        </div>

                        <div class="portfolio">
                            <img src="assets/img/portfolio/2.jpg" alt="Portfolio">
                            <div class="portfolio-content">
                                <ul class="icon">
                                    <li><a href="assets/img/portfolio/2.jpg" data-rel="lightcase:myCollection"><i
                                                class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h3 class="title">Hindi</h3>
                                <span class="post">Comming Soon June 30,2023</span>
                            </div>
                        </div>

                        <div class="portfolio">
                            <img src="assets/img/portfolio/3.jpg" alt="Portfolio">
                            <div class="portfolio-content">
                                <ul class="icon">
                                    <li><a href="assets/img/portfolio/3.jpg" data-rel="lightcase:myCollection"><i
                                                class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h3 class="title">China</h3>
                                <span class="post">Comming Soon June 30,2023</span>
                            </div>
                        </div>

                        <div class="portfolio">
                            <img src="assets/img/portfolio/5.jpg" alt="Portfolio">
                            <div class="portfolio-content">
                                <ul class="icon">
                                    <li><a href="assets/img/portfolio/5.jpg" data-rel="lightcase:myCollection"><i
                                                class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h3 class="title">USA English</h3>
                                <span class="post">Comming Soon June 30,2023</span>
                            </div>
                        </div>

                        <div class="portfolio">
                            <img src="assets/img/portfolio/4.jpg" alt="Portfolio">
                            <div class="portfolio-content">
                                <ul class="icon">
                                    <li><a href="assets/img/portfolio/4.jpg" data-rel="lightcase:myCollection"><i
                                                class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                    <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
                                </ul>
                                <h3 class="title">Bangla</h3>
                                <span class="post">Comming Soon June 30,2023</span>
                            </div>
                        </div>
                    </div>
                    <!--- END COL -->
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PORTFOLIO -->



    <!--=================================================================================
         START Mailchamp
    ==================================================================================-->
    <section id="mailchamp" class="atf-mailchamp-area atf-section-padding pt-0">
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
