@extends('layouts.master')

@section('content')
    <!-- start-page-heading -->
    <div class="atf-page-heading atf-size-md atf-dynamic-bg" data-src="assets/img/bg/1.jpg">
        <div class="container">
            <div class="atf-page-heading-in">
                <h1 class="atf-page-heading-title">Our Course</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html" class="fa fa-home"></a></li>
                    <li><a href="course.html">Course</a></li>
                    <li><a href="blog.html">Web</a></li>
                    <li class="active">Course Details</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end-page-heading -->
    <!--=================================================================================
                                Start Courses Area
    ==================================================================================-->
    <section id="course" class="courses-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-start align-items-center md_btn_fixing">
                <div class="col-lg-7 col-md-7 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-section-title">
                        <h2 class="atf-title-color border-left ps-3">Most Popular <span>Online</span> Best in Courses</h2>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-5 col-md-5 col-12 text-end wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-hero-btn text-end">
                        <a href="#course" class="atf-main-btn"><span>View All Course</span></a>
                    </div>
                </div>
                <!--- END COL -->

            </div>
            <!--- END ROW -->

            <div class="row mt-5 pt-4 align-items-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="tab">
                        <ul class="tabs">
                            <li>
                                <a href="#">
                                    <i class="icofont-network"></i>
                                    <br> Networking
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-file-php"></i>
                                    <br> PHP
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-file-python"></i>
                                    <br> Python
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-brand-designfloat"></i>
                                    <br> Design
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-file-html5"></i>
                                    <br> HTML5/CSS3
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-ui-camera"></i>
                                    <br> Photography
                                </a>
                            </li>
                        </ul>

                        <div class="tab_content">
                            <div class="tabs_item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="tabs_item_content">
                                            <h3><a href="course-details.html">Rural Networking</a></h3>
                                            <ul class="atf-course-admin">
                                                <li><span>by</span> : Abdur Halim
                                                    <ul class="atf-course-rating">
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke icon"></i></li>
                                                    </ul>
                                                </li>
                                                <li><span>In</span> : Course</li>
                                            </ul>
                                            <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any
                                                course my edugarden.</p>
                                            <div class="atf-course-time">
                                                <span><i class="fa-solid fa-clock me-1"></i> Mon-Fri: 10.00-12.50</span>
                                            </div>
                                            <ul class="atf-course-buying mt-4">
                                                <li><span><i class="fa-solid fa-folder icon"></i></span> 6 Lecture</li>
                                                <li><span>$</span>50</li>
                                            </ul>
                                            <div class="atf-hero-btn mt-4">
                                                <a href="#" class="atf-main-btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="atf-singl-video">
                                            <div class="atf-tab-img text-center">
                                                <img class="tab-img" src="assets/img/course/2.jpg" alt="">
                                            </div>
                                            <div class="waves-box">
                                                <a href="https://www.youtube.com/embed/TpdoYhT43rU"
                                                    data-rel="lightcase:myCollection" class="iq-video">
                                                    <i class="icofont-play-alt-3"></i>
                                                    <div class="spinnerbtn"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="tabs_item_content">
                                            <h3><a href="course-details.html">Learning PHP</a></h3>
                                            <ul class="atf-course-admin">
                                                <li><span>by</span> : Abdur Halim
                                                    <ul class="atf-course-rating">
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke icon"></i></li>
                                                    </ul>
                                                </li>
                                                <li><span>In</span> : Course</li>
                                            </ul>
                                            <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any
                                                course my edugarden.</p>
                                            <div class="atf-course-time">
                                                <span><i class="fa-solid fa-clock me-1"></i> Mon-Fri: 10.00-12.50</span>
                                            </div>
                                            <ul class="atf-course-buying mt-4">
                                                <li><span><i class="fa-solid fa-folder icon"></i></span> 6 Lecture</li>
                                                <li><span>$</span>50</li>
                                            </ul>
                                            <div class="atf-hero-btn mt-4">
                                                <a href="#" class="atf-main-btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="atf-singl-video">
                                            <div class="atf-tab-img text-center">
                                                <img class="tab-img" src="assets/img/course/1.jpg" alt="">
                                            </div>
                                            <div class="waves-box">
                                                <a href="https://www.youtube.com/embed/TpdoYhT43rU"
                                                    data-rel="lightcase:myCollection" class="iq-video">
                                                    <i class="icofont-play-alt-3"></i>
                                                    <div class="spinnerbtn"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="tabs_item_content">
                                            <h3><a href="course-details.html">Learning Python</a></h3>
                                            <ul class="atf-course-admin">
                                                <li><span>by</span> : Abdur Halim
                                                    <ul class="atf-course-rating">
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke icon"></i></li>
                                                    </ul>
                                                </li>
                                                <li><span>In</span> : Course</li>
                                            </ul>
                                            <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any
                                                course my edugarden.</p>
                                            <div class="atf-course-time">
                                                <span><i class="fa-solid fa-clock me-1"></i> Mon-Fri: 10.00-12.50</span>
                                            </div>
                                            <ul class="atf-course-buying mt-4">
                                                <li><span><i class="fa-solid fa-folder icon"></i></span> 6 Lecture</li>
                                                <li><span>$</span>50</li>
                                            </ul>
                                            <div class="atf-hero-btn mt-4">
                                                <a href="#" class="atf-main-btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="atf-singl-video">
                                            <div class="atf-tab-img text-center">
                                                <img class="tab-img" src="assets/img/course/3.jpg" alt="">
                                            </div>
                                            <div class="waves-box">
                                                <a href="https://www.youtube.com/embed/TpdoYhT43rU"
                                                    data-rel="lightcase:myCollection" class="iq-video">
                                                    <i class="icofont-play-alt-3"></i>
                                                    <div class="spinnerbtn"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="tabs_item_content">
                                            <h3><a href="course-details.html">Creative Design</a></h3>
                                            <ul class="atf-course-admin">
                                                <li><span>by</span> : Abdur Halim
                                                    <ul class="atf-course-rating">
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke icon"></i></li>
                                                    </ul>
                                                </li>
                                                <li><span>In</span> : Course</li>
                                            </ul>
                                            <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any
                                                course my edugarden.</p>
                                            <div class="atf-course-time">
                                                <span><i class="fa-solid fa-clock me-1"></i> Mon-Fri: 10.00-12.50</span>
                                            </div>
                                            <ul class="atf-course-buying mt-4">
                                                <li><span><i class="fa-solid fa-folder icon"></i></span> 6 Lecture</li>
                                                <li><span>$</span>50</li>
                                            </ul>
                                            <div class="atf-hero-btn mt-4">
                                                <a href="#" class="atf-main-btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="atf-singl-video">
                                            <div class="atf-tab-img text-center">
                                                <img class="tab-img" src="assets/img/course/4.jpg" alt="">
                                            </div>
                                            <div class="waves-box">
                                                <a href="https://www.youtube.com/embed/TpdoYhT43rU"
                                                    data-rel="lightcase:myCollection" class="iq-video">
                                                    <i class="icofont-play-alt-3"></i>
                                                    <div class="spinnerbtn"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="tabs_item_content">
                                            <h3><a href="course-details.html">HTML5/CSS3 Essentials</a></h3>
                                            <ul class="atf-course-admin">
                                                <li><span>by</span> : Abdur Halim
                                                    <ul class="atf-course-rating">
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke icon"></i></li>
                                                    </ul>
                                                </li>
                                                <li><span>In</span> : Course</li>
                                            </ul>
                                            <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any
                                                course my edugarden.</p>
                                            <div class="atf-course-time">
                                                <span><i class="fa-solid fa-clock me-1"></i> Mon-Fri: 10.00-12.50</span>
                                            </div>
                                            <ul class="atf-course-buying mt-4">
                                                <li><span><i class="fa-solid fa-folder icon"></i></span> 6 Lecture</li>
                                                <li><span>$</span>50</li>
                                            </ul>
                                            <div class="atf-hero-btn mt-4">
                                                <a href="#" class="atf-main-btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="atf-singl-video">
                                            <div class="atf-tab-img text-center">
                                                <img class="tab-img" src="assets/img/course/5.jpg" alt="">
                                            </div>
                                            <div class="waves-box">
                                                <a href="https://www.youtube.com/embed/TpdoYhT43rU"
                                                    data-rel="lightcase:myCollection" class="iq-video">
                                                    <i class="icofont-play-alt-3"></i>
                                                    <div class="spinnerbtn"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="tabs_item_content">
                                            <h3><a href="course-details.html">Art of Photography</a></h3>
                                            <ul class="atf-course-admin">
                                                <li><span>by</span> : Abdur Halim
                                                    <ul class="atf-course-rating">
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-solid fa-star icon"></i></li>
                                                        <li><i class="fa-regular fa-star-half-stroke icon"></i></li>
                                                    </ul>
                                                </li>
                                                <li><span>In</span> : Course</li>
                                            </ul>
                                            <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any
                                                course my edugarden.</p>
                                            <div class="atf-course-time">
                                                <span><i class="fa-solid fa-clock me-1"></i> Mon-Fri: 10.00-12.50</span>
                                            </div>
                                            <ul class="atf-course-buying mt-4">
                                                <li><span><i class="fa-solid fa-folder icon"></i></span> 6 Lecture</li>
                                                <li><span>$</span>50</li>
                                            </ul>
                                            <div class="atf-hero-btn mt-4">
                                                <a href="#" class="atf-main-btn">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="atf-singl-video">
                                            <div class="atf-tab-img text-center">
                                                <img class="tab-img" src="assets/img/course/6.jpg" alt="">
                                            </div>
                                            <div class="waves-box">
                                                <a href="https://www.youtube.com/embed/TpdoYhT43rU"
                                                    data-rel="lightcase:myCollection" class="iq-video">
                                                    <i class="icofont-play-alt-3"></i>
                                                    <div class="spinnerbtn"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->




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
