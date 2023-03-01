@extends('layouts.master')

@section('content')

<!-- Start Hero Seciton -->
<div class="atf-slider atf-style1 atf-slider-animation1">
    <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1">
        <div class="slick-wrapper">
            <div class="slick-slide-in">
                <div class="atf-hero atf-style1 atf-size1 atf-hero-overlay atf-white">
                    <div class="atf-hero-bg atf-dynamic-bg atf-bg" data-src="assets/img/slider/1.jpg"></div>
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 col-md-10 col-12 text-start">
                                <div class="atf-hero-text">
                                    <h5 class="atf_sub_title_base">Welcome to Our School</h5>
                                    <h1 class="atf-hero-title atf-title-base">
                                        We are best <span>Learn</span> in the  
                                        Teacher
                                    </h1>
                                    <div class="atf-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    <div class="atf-hero-btn">
                                        <a href="#" class="atf-main-btn me-2">Start Learn More</a>
                                        <a href="#contact" class="atf-main-btn">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slick-slide-in">
                <div class="atf-hero atf-style1 atf-size1 atf-hero-overlay atf-white">
                    <div class="atf-hero-bg atf-dynamic-bg atf-bg" data-src="assets/img/slider/2.jpg"></div>
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 col-md-10 col-12 text-end">
                                <div class="atf-hero-text right-area">
                                    <h5 class="atf_sub_title_base">Welcome to Our Mutali</h5>
                                    <h1 class="atf-hero-title atf-title-base">
                                        We are best teach <span>creative</span>  
                                        Student
                                    </h1>
                                    <div class="atf-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    <div class="atf-hero-btn">
                                        <a href="#" class="atf-main-btn me-2">Start Learn More</a>
                                        <a href="#" class="atf-main-btn">Start Study Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-slide-in">
                <div class="atf-hero atf-style1 atf-size1 atf-hero-overlay atf-white">
                    <div class="atf-hero-bg atf-dynamic-bg atf-bg" data-src="assets/img/slider/3.jpg"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 col-12 text-center">
                                <div class="atf-hero-text center-area">
                                    <h5 class="atf_sub_title_base">Welcome to Our University</h5>
                                    <h1 class="atf-hero-title atf-title-base">
                                        Study <span>can</span> change in your life
                                    </h1>
                                    <div class="atf-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    <div class="atf-hero-btn">
                                        <a href="#about" class="atf-main-btn me-2">Start Learn Now</a>
                                        <a href="#course" class="atf-main-btn">Start Study Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .slick-container -->
    <div class="pagination atf-style2 atf-hidden"></div> <!-- If dont need Pagination then add class .atf-hidden -->
    <div class="swipe-arrow atf-style2"> <!-- If dont need navigation then add class .atf-hidden -->
        <div class="slick-arrow-left"><i class="icofont-arrow-left"></i></div>
        <div class="slick-arrow-right"><i class="icofont-arrow-right"></i></div>
    </div>
</div><!-- .atf-slider -->
<!-- End Hero Seciton -->


<!--================================================================================= 
                           Start Feature Design
==================================================================================-->
<section id="feature" class="atf-feature-area atf-section-padding bg-light">
    <div class="container">
        <div class="row justify-content-start atf-feature-box">
            <div class="col-lg-6 col-md-6 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color border-left ps-3">Our <span>Feature</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notruexercit dolor sit amet eget.</p>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
        
        <div class="row mt-5 pt-4">
            <div class="col-lg-3 col-md-6 col-12 wow fadeInLeft" data-wow-delay=".2s">
                <div class="atf-single-feature">
                    <i class="icofont-users-alt-3"></i>
                    <h3> Wer are Suceess</h3>
                    <p>Lorem ipsum dolor sit amet, ed do eiusmod tempor cididunt ut labor.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="atf-single-feature">
                    <i class="icofont-automation"></i>
                    <h3>Our Career</h3>
                   <p>Lorem ipsum dolor sit amet, ed do eiusmod tempor cididunt ut labor.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 wow fadeInRight" data-wow-delay=".4s">
                <div class=" atf-single-feature">
                    <i class="icofont-children-care"></i>
                    <h3>Our Knowledge</h3>
                    <p>Lorem ipsum dolor sit amet, ed do eiusmod tempor cididunt ut labor.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <div class="row">
                    <div class="atf-booking-form">
                        <h5>You can Search any Book Product Buying.</h5>
                        <form action="#" class="atf-booking-form-box">
                            <div class="col-12">
                                <div class="atf-booking-form-item">
                                    <div class="form-group mb-0">
                                        <input type="text" name="name" class="form-control" id="name1" placeholder="Your Keyword" required="required">
                                    </div>
                                </div> 
                            </div> 

                            <div class="col-12">
                                <div class="atf-booking-form-item">									
                                    <select class="nice-select">
                                        <option>Choose Category</option>
                                        <option>English</option>
                                        <option>Bangla</option>
                                        <option>Hindi</option>
                                        <option>Islam</option>
                                    </select>
                                </div> 
                            </div> 
                            <div class="col-12">
                                <div class="atf-booking-form-item">									
                                    <select class="nice-select">
                                        <option>Select Price</option>
                                        <option>$20</option>
                                        <option>$30</option>
                                        <option>$40</option>
                                        <option>$50</option>
                                    </select>
                                </div> 
                            </div> 
                            <div class="mt-3 col-12">
                                <div class="atf-hero-btn"> 
                                    <a href="#course" class="atf-main-btn"><span>Search Now</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature Design -->

<!--================================================================================= 
                           Start About us
==================================================================================-->
<section id="about" class="atf-about-area atf-section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12 text-start wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-about-img">
                    <img src="assets/img/about/1.png" alt="about">
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-6 col-md-6 col-12  ps-lg-5 text-start wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-about-title mt-md-40 atf-section-title">
                    <h5 class="border-left mb-2 ps-3">About us</h5>
                    <h2 class="atf-title-color">Welcome to our School & College</h2>
                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
                    <div class="atf-hero-btn mt-4">
                        <a href="about.html" class="atf-main-btn"><span>Learn More</span></a>
                    </div>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div>
</section>
<!-- End About US -->


<!--================================================================================= 
                            Start Counter Area
==================================================================================-->
<section id="counter" class="atf-counter-area">
    <div class="container">
        <div class="row atf-dynamic-bg atf-bg atf-section-padding" data-src="assets/img/bg/2.jpg">
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="counter">  
                    <div class="counter-icon"><i class="icofont-teacher"></i></div>
                    <h3>Teachers</h3>
                    <span class="counter-value">1205</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="counter pink">  
                    <div class="counter-icon"><i class="icofont-document-folder"></i></div>
                    <h3>Courses</h3>
                    <span class="counter-value">115</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="counter blue">  
                    <div class="counter-icon"><i class="icofont-users-alt-2"></i></div>
                    <h3>Members</h3>
                    <span class="counter-value">1500</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                <div class="counter green">  
                    <div class="counter-icon"><i class="icofont-flag-alt-2"></i></div>
                    <h3>Countries</h3>
                    <span class="counter-value">2000</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Area -->



<!--================================================================================= 
                            Start Courses Area
==================================================================================-->
<section id="course" class="courses-area atf-section-padding">
    <div class="container">
        <div class="row justify-content-start align-items-center md_btn_fixing">
            <div class="col-lg-7 col-md-7 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color border-left ps-3">Most Popular <span>Online</span> Best in Courses</h2>
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-5 col-md-5 col-12 text-end wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-hero-btn text-end">
                    <a href="course.html" class="atf-main-btn"><span>View All Course</span></a>
                </div>
            </div><!--- END COL -->
            
        </div><!--- END ROW -->

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
                                        <h3><a href="course.html">Rural Networking</a></h3>
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
                                        <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any course my edugarden.</p>
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
                                            <a href="https://www.youtube.com/embed/TpdoYhT43rU" data-rel="lightcase:myCollection" class="iq-video"> 
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
                                        <h3>Learning PHP</h3>
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
                                        <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any course my edugarden.</p>
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
                                            <a href="https://www.youtube.com/embed/TpdoYhT43rU" data-rel="lightcase:myCollection" class="iq-video"> 
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
                                        <h3>Learning Python</h3>
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
                                        <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any course my edugarden.</p>
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
                                            <a href="https://www.youtube.com/embed/TpdoYhT43rU" data-rel="lightcase:myCollection" class="iq-video"> 
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
                                        <h3>Creative Design</h3>
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
                                        <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any course my edugarden.</p>
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
                                            <a href="https://www.youtube.com/embed/TpdoYhT43rU" data-rel="lightcase:myCollection" class="iq-video"> 
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
                                        <h3>HTML5/CSS3 Essentials</h3>
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
                                        <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any course my edugarden.</p>
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
                                            <a href="https://www.youtube.com/embed/TpdoYhT43rU" data-rel="lightcase:myCollection" class="iq-video"> 
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
                                        <h3>Art of Photography</h3>
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
                                        <p class="pe-lg-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.You can join any course my edugarden.</p>
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
                                            <a href="https://www.youtube.com/embed/TpdoYhT43rU" data-rel="lightcase:myCollection" class="iq-video"> 
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


<!-- START CHOOSE -->
<section id="event" class="atf-event-area atf-section-padding">
    <div class="container">
        <div class="row justify-content-start align-items-center md_btn_fixing">
            <div class="col-lg-8 col-md-8 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color border-left ps-3">Studypoint   <span>Upcoming</span> Events in Courses</h2>
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-4 col-md-4 col-12 text-end wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-hero-btn text-end">
                    <a href="#course" class="atf-main-btn"><span>View All Events</span></a>
                </div>
            </div><!--- END COL -->
            
        </div><!--- END ROW -->
        
        <div class="row mt-5 pt-4">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row atf-events-area align-items-center">
                    <div class="col-lg-2 col-12">
                        <div class="atf-event-date text-center">
                            <span class="date">26</span><br> <span class="time">September</span>
                        </div>
                    </div><!--- END COL -->
                    
                    <div class="col-lg-7 col-12">
                        <div class="atf-event-content mt-2">
                            <h4 class="atf-event-title"><a href="#">Course to change people poor help fund project in 2023...</a></h4>
                            <p class="atf-event-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit child & poor.
                            </p>
                            <ul class="atf-event-bar">
                                <li class="atf-date"><i class="far fa-clock"></i><a href="#">22 Octobar, 2023</a></li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#"><strong>Speaker</strong>: Al-Hamid</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#"> <strong>Subject</strong> : English, Math</a></li>
                            </ul>
                        </div><!--- END COL -->
                    </div><!--- END COL -->
                    
                    <div class="col-lg-3 col-12">
                        <div class="atf-hero-btn text-end">
                            <a href="#course" class="atf-main-btn"><span>Get Start Now</span></a>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END COL -->
            
            <div class="col-lg-12">
                <div class="row atf-events-area align-items-center">
                    <div class="col-lg-2 col-12 mx-auto my-auto">
                        <div class="atf-event-date text-center">
                            <span class="date">28</span><br> <span class="time">September</span>
                        </div>
                    </div><!--- END COL -->
                    
                    <div class="col-lg-7 col-12">
                        <div class="atf-event-content mt-2">
                            <h4 class="atf-event-title"><a href="#">Course teacher to change your help fund project in 2023...</a></h4>
                            <p class="atf-event-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit child & poor.
                            </p>
                            <ul class="atf-event-bar">
                                <li class="atf-date"><i class="far fa-clock"></i><a href="#">22 Octobar, 2023</a></li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#"><strong>Speaker</strong>: Al-Hamid</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#"> <strong>Subject</strong> : English, Math</a></li>
                            </ul>
                        </div><!--- END COL -->
                    </div><!--- END COL -->
                    
                    <div class="col-lg-3 col-12">
                        <div class="atf-hero-btn text-end">
                            <a href="#course" class="atf-main-btn"><span>Get Start Now</span></a>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END COL -->
            
            <div class="col-lg-12">
                <div class="row atf-events-area align-items-center">
                    <div class="col-lg-2 col-12">
                        <div class="atf-event-date text-center">
                            <span class="date">25</span><br> <span class="time">September</span>
                        </div>
                    </div><!--- END COL -->
                    
                    <div class="col-lg-7 col-12">
                        <div class="atf-event-content mt-2">
                            <h4 class="atf-event-title"><a href="#">Teacher & students to change poor help fund progress in 2023...</a></h4>
                            <p class="atf-event-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit child & poor.
                            </p>
                            <ul class="atf-event-bar">
                                <li class="atf-date"><i class="far fa-clock"></i><a href="#">22 Octobar, 2023</a></li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#"><strong>Speaker</strong>: Al-Hamid</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#"> <strong>Subject</strong> : English, Math</a></li>
                            </ul>
                        </div><!--- END COL -->
                    </div><!--- END COL -->
                    
                    <div class="col-lg-3 col-12">
                        <div class="atf-hero-btn text-end">
                            <a href="#course" class="atf-main-btn"><span>Get Start Now</span></a>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END CHOOSE -->
    
<!-- START HIRE -->
<div class="atf-hire atf-section-padding">
    <div class="container">
        <div class="row align-items-center atf-hire-area">
            <div class="col-lg-8 col-md-12">
                <div class="atf-hire-content">
                    <h3>Contact Us! Mobile : +698 575 8783</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                </div>
            </div><!--- END COL -->
                
            <div class="col-lg-4 col-12">
                <div class="atf-hero-btn text-end">
                    <a href="contact.html" class="atf-main-btn"><span>Get Start Now</span></a>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</div>
<!-- END HIRE -->

<!--================================================================================= 
        START WHY CHOOSE US
==================================================================================-->
<section id="service" class="atf-service-area bg-light atf-section-padding">
    <div class="container">
        <div class="row justify-content-start align-items-center md_btn_fixing">
            <div class="col-lg-6 col-md-6 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color border-left ps-3">Our <span>Latest</span> Service</h2>
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-6 col-md-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-hero-btn text-end">
                    <a href="service.html" class="atf-main-btn">View All Service</a>
                </div>
            </div><!--- END COL -->
            
        </div><!--- END ROW -->


        <div class="row mt-5 pt-4">
            <!-- single item -->
            <div class="col-lg-4 col-md-6 col-12  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa-solid fa-stamp"></i></span>
                    </div>
                    <h3 class="title">Trending & Certified</h3>
                    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. 
                    Qui quaerat fugit quas sequi dolore quisquam illum.</p>
                </div>
            </div>
            <!-- End single item -->
            
            <div class="col-lg-4 col-md-6 col-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa-solid fa-file-certificate"></i></span>
                    </div>
                    <h3 class="title">Online E-Books</h3>
                    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. 
                    Qui quaerat fugit quas sequi dolore quisquam illum.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-12  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa-solid fa-certificate"></i></span>
                    </div>
                    <h3 class="title">Liberary & Guarant</h3>
                    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. 
                    Qui quaerat fugit quas sequi dolore quisquam illum.</p>
                </div>
            </div>
            
            <!-- single item -->
            <div class="col-lg-4 col-md-6 col-12  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa-solid fa-building-columns"></i></span>
                    </div>
                    <h3 class="title">Teachers & Career</h3>
                    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. 
                    Qui quaerat fugit quas sequi dolore quisquam illum.</p>
                </div>
            </div>
            
            <!-- End single item -->
            <div class="col-lg-4 col-md-6 col-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa-solid fa-school"></i></span>
                    </div>
                    <h3 class="title">Online & Course</h3>
                    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. 
                    Qui quaerat fugit quas sequi dolore quisquam illum.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-12  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa-solid fa-graduation-cap"></i></span>
                    </div>
                    <h3 class="title">Courses & Career</h3>
                    <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. 
                    Qui quaerat fugit quas sequi dolore quisquam illum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END WHY CHOOSE US -->

<!--================================================================================= 
                            Start Our teacher
==================================================================================-->
<section id="teacher" class="atf-teacher-area  atf-section-padding">
    <div class="container">
        <div class="row justify-content-start align-items-center md_btn_fixing">
            <div class="col-lg-6 col-md-6 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color border-left ps-3">Our <span>Teachers</span></h2>
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-6 col-md-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-hero-btn text-end">
                    <a href="teacher.html" class="atf-main-btn">View All Teacher</a>
                </div>
            </div><!--- END COL -->
            
        </div><!--- END ROW -->

        <div class="row mt-5 pt-4">
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.2s">
                <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-2.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Abdur Kabir</a></h3>
                            <span class="post">Web Designer</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.3s">
                 <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-7.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Abdul Malik</a></h3>
                            <span class="post">Web developer</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.4s">
                <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-4.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Abdur Rahman</a></h3>
                            <span class="post">Web developer</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-8.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Abdur Rahim</a></h3>
                            <span class="post">Web Design</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
                <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-5.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Abdul Kudus</a></h3>
                            <span class="post">Digital Markating</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.7s">
                <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-6.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Abdur Rahemu</a></h3>
                            <span class="post">Digital Markating</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
               <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-1.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Abdul Jobaru</a></h3>
                            <span class="post">Afiliate Markating</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center wow fadeIn" data-wow-delay="1.4s">
               <div class="single_team">
                    <div class="my-team">
                        <div class="pic">
                            <img src="assets/img/teachers/teacher-image-8.jpg" class="img-fluid" alt="teacher-member">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><a href="teacher.html">Al Jobaru</a></h3>
                            <span class="post">Afiliate Markating</span>
                        </div>
                        <ul class="social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-google-plus"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                        </ul>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Our teacher -->

<!-- START PORTFOLIO -->
<section id="portfolio" class="atf-portfolio-area  atf-section-padding bg-f6">
    <div class="container">
        <div class="row justify-content-start align-items-center md_btn_fixing">
            <div class="col-lg-6 col-md-6 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color border-left ps-3">Our <span>Gallery</span></h2>
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-6 col-md-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-hero-btn text-end">
                    <a href="gallery.html" class="atf-main-btn">View All Gallery</a>
                </div>
            </div><!--- END COL -->
            
        </div><!--- END ROW -->

        
        <div class="row mt-5 pt-4">
            <div class="col-lg-12">
                <div id="gallery-slider" class="owl-carousel owl-theme atf-main-testimonials">
                    <div class="portfolio">
                        <img src="assets/img/portfolio/1.jpg" alt="Portfolio">
                        <div class="portfolio-content">
                            <ul class="icon">
                                <li><a href="assets/img/portfolio/1.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                <li><a href="gallery.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3 class="title">English</h3>
                            <span class="post">Comming Soon June 30,2023</span>
                        </div>
                    </div>
                    
                    <div class="portfolio">
                        <img src="assets/img/portfolio/2.jpg" alt="Portfolio">
                        <div class="portfolio-content">
                            <ul class="icon">
                                <li><a href="assets/img/portfolio/2.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                <li><a href="gallery.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3 class="title">Hindi</h3>
                            <span class="post">Comming Soon June 30,2023</span>
                        </div>
                    </div>
                    
                    <div class="portfolio">
                        <img src="assets/img/portfolio/3.jpg" alt="Portfolio">
                        <div class="portfolio-content">
                            <ul class="icon">
                                <li><a href="assets/img/portfolio/3.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                <li><a href="gallery.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3 class="title">China</h3>
                            <span class="post">Comming Soon June 30,2023</span>
                        </div>
                    </div>
                    
                    <div class="portfolio">
                        <img src="assets/img/portfolio/5.jpg" alt="Portfolio">
                        <div class="portfolio-content">
                            <ul class="icon">
                                <li><a href="assets/img/portfolio/5.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                <li><a href="gallery.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3 class="title">USA English</h3>
                            <span class="post">Comming Soon June 30,2023</span>
                        </div>
                    </div>
                    
                    <div class="portfolio">
                        <img src="assets/img/portfolio/4.jpg" alt="Portfolio">
                        <div class="portfolio-content">
                            <ul class="icon">
                                <li><a href="assets/img/portfolio/4.jpg" data-rel="lightcase:myCollection"><i class="fa fa-search" data-rel="lightcase:myCollection"></i></a></li>
                                <li><a href="gallery.html"><i class="fa fa-link"></i></a></li>
                            </ul>
                            <h3 class="title">Bangla</h3>
                            <span class="post">Comming Soon June 30,2023</span>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END PORTFOLIO -->

<!--================================================================================= 
                            Start pricing section
==================================================================================-->
<section id="pricing" class="atf-section-padding">
    <div class="container">
        <div class="row justify-content-start align-items-center md_btn_fixing">
            <div class="col-lg-4 col-md-5 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                <h2 class="atf-title-color border-left ps-3">Our <span>Pricing</span></h2>
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-5 col-md-4 col-12 text-start wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notruexercit adipisicing amet eget dolor sit.</p>
            </div><!--- END COL -->
            
            <div class="col-lg-3 col-md-3 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-hero-btn text-end">
                    <a href="pricing.html" class="atf-main-btn">View Pric</a>
                </div>
            </div><!--- END COL -->
            
        </div><!--- END ROW -->

        <div class="row mt-5 pt-4">
            <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-delay="0.2s">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">Standard</h3>
                        <div class="price-value">
                             <span>$10/Month</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Course Teaching</li>
                        <li>Free Accounts Create</li>
                        <li>Course Video</li>
                        <li>10 Week Course</li>
                        <li>15 Get Video</li>
                        <li class="disable"> 24/7 Support</li>
                    </ul>
                    <div class="pricingTable-signup atf-hero-btn">
                        <a href="#" class="atf-main-btn">sign up Now</a>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-delay="0.3s">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">BUSINESS</h3>
                        <div class="price-value">
                             <span>$20/Month</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Course Teaching</li>
                        <li>Free Accounts Create</li>
                        <li>Course Video</li>
                        <li>10 Week Course</li>
                        <li>15 Get Video</li>
                        <li class="disable"> 24/7 Support</li>
                    </ul>
                    <div class="pricingTable-signup atf-hero-btn">
                        <a href="#" class="atf-main-btn">sign up Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-delay="0.4s">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">PREMIUM</h3>
                        <div class="price-value">
                             <span>$30/Month</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Course Teaching</li>
                        <li>Free Accounts Create</li>
                        <li>Course Video</li>
                        <li>10 Week Course</li>
                        <li>15 Get Video</li>
                        <li class="disable"> 24/7 Support</li>
                    </ul>
                    <div class="pricingTable-signup atf-hero-btn">
                        <a href="#" class="atf-main-btn">sign up Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End pricing section -->

<!--================================================================================= 
                            Start testimonial
==================================================================================-->
<section id="testimonial" class="atf-testimonial-area bg-overlay atf-section-padding atf-dynamic-bg atf-bg" data-src="assets/img/slider/hero-bg3.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-12 text-center">
                <div id="testimonial-slider" class="owl-carousel owl-theme atf-main-testimonials">
                    <div class="testimonial">
                        <div class="pic">
                                <img src="assets/img/client/client-1.jpg" alt="client">
                        </div>
                    
                        <h3 class="testimonial-title">
                            <a href="testimonial.html">Halim</a>
                            <small>Book Writer</small>
                        </h3>
                    
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi facilisis.</p>
                    </div>
                    
                    <div class="testimonial">
                        <div class="pic">
                                <img src="assets/img/client/client-2.jpg" alt="client">
                        </div>
                    
                        <h3 class="testimonial-title">
                            <a href="testimonial.html">Hamid</a>
                            <small>Book Writer</small>
                        </h3>
                    
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi facilisis.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial -->


<!--================================================================================= 
                            Start recent Blog
==================================================================================-->
<section id="blog" class="atf-blog-area atf-section-padding">
    <div class="container">
        <div class="row justify-content-start md_btn_fixing">
            <div class="col-lg-6 col-md-6 col-12 text-start wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color border-left ps-3">Our <span>Recent</span> News</h2>
                </div>
            </div><!--- END COL -->
            
            <div class="col-lg-6 col-md-6 col-12 text-end wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-hero-btn text-end">
                    <a href="blog.html" class="atf-main-btn">View All Blog</a>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->

    
        <div class="row mt-5 pt-4">
            <div class="col-lg-12">
                <div id="atf-blog-slider-1" class="atf-blog-slider atf-main-testimonials owl-carousel owl-theme">
                    <div class="atf-single-blog">
                        <div class="atf-blog-img">
                            <img src="assets/img/blog/1.jpg" alt="blog">
                        </div>
                        <div class="atf-blog-content">
                            <h4><a href="blog.html">Best group work in this class.</a></h4>
                            <ul>
                                <li><a href="#"><i class="icofont-user-suited"></i> Admin</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 25k</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2023</a></li>
                            </ul>
                            
                            <p>Lorem ipsum dolor sit amet consecte adipisic elitsed eiusmod tempor enim minim ven win amquis not ruexercit dolor.</p>
                        </div>
                    </div>
                    
                    <div class="atf-single-blog">
                        <div class="atf-blog-img">
                            <img src="assets/img/blog/2.jpg" alt="blog">
                        </div>
                        <div class="atf-blog-content">
                            <h4><a href="blog.html">Change Your Life of College.</a></h4>
                            <ul>
                                <li><a href="#"><i class="icofont-user-suited"></i> Admin</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 25k</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2023</a></li>
                            </ul>
                            
                            <p>Lorem ipsum dolor sit amet consecte adipisic elitsed eiusmod tempor enim minim ven win amquis not ruexercit dolor.</p>
                        </div>
                    </div>
                    <div class="atf-single-blog">
                        <div class="atf-blog-img">
                            <img src="assets/img/blog/3.jpg" alt="blog">
                        </div>
                        <div class="atf-blog-content">
                            <h4><a href="blog.html">Best Language of School ..</a></h4>
                            <ul>
                                <li><a href="#"><i class="icofont-user-suited"></i> Admin</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 25k</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2023</a></li>
                            </ul>
                            
                            <p>Lorem ipsum dolor sit amet consecte adipisic elitsed eiusmod tempor enim minim ven win amquis not ruexercit dolor.</p>
                        </div>
                    </div>
                    
                    <div class="atf-single-blog">
                        <div class="atf-blog-img">
                            <img src="assets/img/blog/4.jpg" alt="blog">
                        </div>
                        <div class="atf-blog-content">
                            <h4><a href="blog.html"> Change Your Life that win</a></h4>
                            <ul>
                                <li><a href="#"><i class="icofont-user-suited"></i> Admin</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 25k</a></li>
                                <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2023</a></li>
                            </ul>
                            
                            <p>Lorem ipsum dolor sit amet consecte adipisic elitsed eiusmod tempor enim minim ven win amquis not ruexercit dolor.</p>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end recent blog -->

<!--================================================================================= 
                            Start Contact Area
==================================================================================-->
<section id="contact" class="atf-contact-area atf-section-padding bg-f6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="atf-section-title">
                    <h2 class="atf-title-color">Our <span>Contact</span> Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notruexercit dolor sit amet eget.</p>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
        
        <div class="row mt-5 pt-4">	
             <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
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

            <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
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

            <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
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
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email_1" placeholder="Your Email" autocomplete="off" required="">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" autocomplete="off" required="">
                            </div>
                        </div>
                        

                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" cols="30" rows="4" id="message" placeholder="Enter your message" autocomplete="off" required=""></textarea>
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
            
            <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <!-- Google Map start-->
                <div class="atf-google-map mt-md-40">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.764530126784!2d90.37238931424376!3d23.755774894489523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf534c0809ff%3A0xab142c55845030d2!2sEducationUSA%20Advising%20Center!5e0!3m2!1sen!2sbd!4v1672504311283!5m2!1sen!2sbd"></iframe>
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
        <div class="row align-items-center bg-overlay justify-content-start atf-single-mailchamp atf-dynamic-bg atf-bg atf-section-padding" data-src="assets/img/bg/2.jpg">
            <div class="col-lg-6 col-md-6 col-12 text-start">
                <!-- Newsletter title -->
                <div class="atf-mailchame-content">
                    <h2>Our Newsletter to Subscribe</h2>
                    <p class="color-white pe-lg-3">Dantes remained confused and silent by this explanation of the, consectetur adipisic elit,</p>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-12 text-center">		
                <div class="subscribe-form">
                    <div class="subscribe-form-inner mt-5">
                        <!-- Newsletter form -->
                        <form class="form-inline dv-form" id="mc-form">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required">
                                <div class="atf-hero-btn">
                                    <button class="atf-main-btn btn" name="Subscribe" id="subscribe-btn" type="submit">Submit</button>
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
<!-- End footer --
    
@endsection