@extends('layouts.master')

@section('content')
    <!-- start-page-heading -->
    <div class="atf-page-heading atf-size-md atf-dynamic-bg" data-src="assets/img/bg/1.jpg">
        <div class="container">
            <div class="atf-page-heading-in">
                <h1 class="atf-page-heading-title">Our Error</h1>
                <ol class="breadcrumb">
                    <li><a href="404.html" class="fa fa-home"></a></li>
                    <li><a href="teacher.html">Error</a></li>
                    <li><a href="blog.html">Web</a></li>
                    <li class="active">404</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end-page-heading -->


    <!-- error SECTION START-->
    <section id="error" class="atf-error-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-12 text-center">
                    <div class="error-content">
                        <img src="assets/img/404.png" alt="error">
                        <div class="blog_search mt-4">
                            <input type="text" class="form-control" placeholder="Search...">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                        <h2>Page Not Found</h2>
                        <p class="mt-3">The page you are looking for might have been removed had its name changed or The
                            page you are looking for might have been had its name changed or is temporarily unavailable.</p>

                        <div class="atf-hero-btn mt-4">
                            <a href="index.html" class="atf-main-btn">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--- END ROW -->
        </div>
        <!--- END container -->
    </section>
    <!-- error SECTION end-->



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
