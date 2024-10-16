<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:53:49 GMT -->

<head>

    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16535550826">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-16535550826');
        </script>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.html') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logowise.jpeg') }}" />

    <!-- PAGE TITLE HERE -->
    <title>About Us</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap4-toggle.min.css') }}">
    <!-- Bootstrap seclect -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}" />
    <!-- Price Range Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap-slider.min.css') }}" />
    <!-- Bootstrap data table -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/dataTables.bootstrap4.min.css') }}">
    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/dropzone.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font.css') }}" />
    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/feather.css') }}" />
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" />
    <!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/lc_lightbox.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/m-custom-scrollbar.min.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.min.css') }}">
    <!-- Slick Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick-theme.css') }}">
    <!-- Main STyle Sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">


</head>

<body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="windows8">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->
    <div class="page-wraper"> <!-- HEADER START -->
        @include('header')
        <!-- HEADER END -->

        <!-- Content -->
        <div class="page-content">

            <!-- Banner Area -->
            <div class="aon-page-benner-area">
                <div class="aon-page-banner-row"
                    style="background-image: url({{ asset('frontend/assets/images/banner/job-banner.jpg') }})">
                    <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
                    <div class="sf-banner-heading-wrap">
                        <div class="sf-banner-heading-area">
                            <div class="sf-banner-heading-large">About Us</div>
                            <div class="sf-banner-breadcrumbs-nav">
                                <ul class="list-inline">
                                    <li><a href="{{ url('/') }}"> Home </a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area End -->

            <!-- Why Choose us -->
            <section class="aon-why-choose2-area">
                <div class="container">

                    <div class="aon-why-choose2-box">
                        <div class="row">
                            <!-- COLUMNS LEFT -->
                            <div class="col-lg-6 col-md-12">
                                <div class="aon-why-choose-info">
                                    <!--Title Section Start-->
                                    <div class="section-head">
                                        <span class="aon-sub-title">Choose</span>
                                        <h2 class="aon-title">Why Choose us</h2>
                                    </div>
                                    <!--Title Section Start End-->

                                    <ul class="aon-why-choose-steps list-unstyled">
                                        <!-- COLUMNS 1 -->
                                        <li class="d-flex">
                                            <div class="aon-w-choose-left aon-icon-effect">
                                                <div class="aon-w-choose-icon"><i class="aon-icon"><img
                                                            src="{{ asset('frontend/assets/images/whychoose/1.png') }}"
                                                            alt=""></i></div>
                                            </div>
                                            <div class="aon-w-choose-right">
                                                <h4 class="aon-title">Trusted Providers</h4>
                                                <p>We understand the importance of working with trusted, reliable
                                                    service providers. That's why we carefully vet all providers on our
                                                    platform to ensure they meet our stringent quality standards. You
                                                    can rest assured knowing that you're working with professionals who
                                                    are committed to delivering exceptional service.</p>
                                            </div>
                                        </li>
                                        <!-- COLUMNS 2 -->
                                        <li class="d-flex">
                                            <div class="aon-w-choose-left aon-icon-effect">
                                                <div class="aon-w-choose-icon"><i class="aon-icon"><img
                                                            src="{{ asset('frontend/assets/images/whychoose/2.png') }}"
                                                            alt=""></i></div>
                                            </div>
                                            <div class="aon-w-choose-right">
                                                <h4 class="aon-title">Seamless Experience</h4>
                                                <p>We believe in making the process of finding and hiring service
                                                    providers as seamless and hassle-free as possible. Our platform is
                                                    designed with user experience in mind, offering a streamlined
                                                    interface that makes it easy to find, compare, and connect with
                                                    providers in just a few clicks.</p>
                                            </div>
                                        </li>
                                        <!-- COLUMNS 3 -->
                                        <li class="d-flex">
                                            <div class="aon-w-choose-left aon-icon-effect">
                                                <div class="aon-w-choose-icon"><i class="aon-icon"><img
                                                            src="{{ asset('frontend/assets/images/whychoose/3.png') }}"
                                                            alt=""></i></div>
                                            </div>
                                            <div class="aon-w-choose-right">
                                                <h4 class="aon-title">Wide Range of Services</h4>
                                                <p>Whatever your needs may be, WisePlix has you covered. From home
                                                    services like plumbing and electrical work to professional services
                                                    like graphic design and marketing, we offer a wide range of
                                                    categories to ensure that you can find exactly what you're looking
                                                    for.</p>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- COLUMNS RIGHT -->
                            <div class="col-lg-6 col-md-12">
                                <div class="aon-why-choose2-line">
                                    <div class="aon-why-choose2-pic"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Why Choose us END -->

            <!-- About Area -->
            <div class="aon-about-area">
                <div class="container">

                    <div class="section-content">
                        <div class="row d-flex flex-wrap align-items-center a-b-none">
                            <div class="col-lg-6 col-md-12">
                                <div class="aon-about-pic">
                                    <img src="{{ asset('frontend/assets/images/about-pic.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--Title Section Start-->
                                <div class="section-head">
                                    <span class="aon-sub-title">About</span>
                                    <h2 class="sf-title">Upgrade Your Skills With Service Finder</h2>
                                    <p>Welcome to WisePlix,a Product by Wiseagle Technologies your premier platform for
                                        connecting with service providers to fulfill all your needs. We understand that
                                        navigating the world of service procurement can be daunting, which is why we've
                                        created a seamless, user-friendly platform to simplify the process and connect
                                        you with trusted providers who can deliver exceptional service. </p>
                                </div>
                                <!--Title Section End-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- About Area END -->

            <!-- How it Work -->
            <section class="bg-white aon-how-service-area">
                <div class="container">

                    <div class="section-content">
                        <div class="row">
                            <!--Title Section Start-->
                            <div class="col-lg-4 col-md-12">
                                <span class="aon-sub-title">Steps</span>
                                <h2 class="sf-title">How Service Finder Works</h2>
                            </div>
                            <!--Title Section End-->

                            <div class="col-lg-8 col-md-12">
                                <!-- Steps Block Start-->
                                <div class="aon-step-blocks">
                                    <div class="row">
                                        <!-- COLUMNS 1 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section step-position-1 aon-icon-effect">
                                                <div class="aon-step-icon aon-icon-box">
                                                    <span>
                                                        <i class="aon-icon"><img
                                                                src="{{ asset('frontend/assets/images/step-icon/1.png') }}"
                                                                alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title">Describe Your Task</h4>
                                                    <p>Answer a Few Questions to Know Your Exact Requirement.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COLUMNS 2 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section step-position-2 aon-icon-effect">
                                                <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img
                                                                src="{{ asset('frontend/assets/images/step-icon/2.png') }}"
                                                                alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title">Choose a Wise Pro</h4>
                                                    <p>You Find the List of Professional Near You Choose the best.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COLUMNS 3 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section  step-position-3  aon-icon-effect">
                                                <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img
                                                                src="{{ asset('frontend/assets/images/step-icon/3.png') }}"
                                                                alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title">Get Job Done</h4>
                                                    <p>Professional Will also Reach out to You to and Finish Your
                                                        Service Requirement.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Steps Block End-->
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <!-- How it Work END -->

            <!-- Statics -->
            <div class="site-bg-primary aon-statics-area">
                <div class="container">

                    <div class="section-content">
                        <div class="row d-flex flex-wrap align-items-center a-b-none">
                            <div class="col-lg-6 col-md-12">
                                <!--Title Section Start-->
                                <div class="section-head">
                                    <span class="aon-sub-title">Our Mission</span>
                                    <p>At WisePlix, our mission is simple: to make it easy for individuals and
                                        businesses to find and connect with service providers who can meet their
                                        specific needs. Whether you're looking for a plumber, a graphic designer, a
                                        personal trainer, or anything in between, WisePlix is your one-stop destination
                                        for finding the perfect match.
                                        . </p>
                                </div>
                                <!--Title Section End-->
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--Statics-blocks Section Start-->
                                <div class="aon-statics-blocks">
                                    <div class="row">
                                        <!--Block 1-->
                                        <div class="col-lg-6 m-b30 aon-static-position-1">
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-blue">
                                                    <div class="aon-company-static-num counter aon-icon">36</div>
                                                    <div class="aon-company-static-name">Providers</div>
                                                </div>
                                            </div>
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-yellow">
                                                    <div class="aon-company-static-num counter aon-icon">108</div>
                                                    <div class="aon-company-static-name">Sub Category</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Block 2-->
                                        <div class="col-lg-6 m-b30 aon-static-position-2">
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-green">
                                                    <div class="aon-company-static-num counter aon-icon">89</div>
                                                    <div class="aon-company-static-name">Customer</div>
                                                </div>
                                            </div>
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-skyblue">
                                                    <div class="aon-company-static-num counter aon-icon">57</div>
                                                    <div class="aon-company-static-name">Categories</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Statics-blocks Section End-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Provider END -->
            <!-- About Area -->
            <div class="aon-about-area">
                <div class="container">

                    <div class="section-content">
                        <div class="row d-flex flex-wrap align-items-center a-b-none">
                            <div class="col-lg-6 col-md-12">
                                <div class="aon-about-pic">
                                    <img src="{{ asset('frontend/assets/images/about-pic.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--Title Section Start-->
                                <div class="section-head">
                                    <span class="aon-sub-title">How It Works</span>
                                    <p>Using WisePlix is easy and intuitive. Simply tell us what type of service you're
                                        looking for, Answer A Few Questions Related to your Service and we'll match you
                                        with qualified providers who meet your criteria. Browse through profiles, read
                                        reviews from other users, and compare quotes to find the best fit for your needs
                                        and budget.We will also Notify Top Professionals About your Requirement With
                                        WisePlix, finding the right service provider has never been easier. </p>
                                </div>
                                <!--Title Section End-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- About Area END -->


            <!-- Testimonial Section -->
            <div class="aon-testmonials-area sf-curve-pos">
                <div class="container">
                    <!--Title Section Start-->
                    <div class="section-head">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <span class="sf-sub-title">Testimonial</span>
                                <h2 class="sf-title">What People Say</h2>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!--Title Section End-->


                    <div class="section-content">
                        <!--testimonial top-->
                        <div class="slider-vertical-wrap">
                            <!-- THUMBNAILS -->
                            <div class="slick-testimonials-thumbnails">
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-user">
                                        <div class="sf-testimonial-media"><img
                                                src="{{ asset('frontend/assets/images/testimonials/pic1.jpg') }}"
                                                alt=""></div>
                                        <div class="sf-testimonial-user-detail">
                                            <div class="sf-testi-user-name">Mark, Homestay </div>
                                            <div class="sf-testi-user-position">Sales Manager</div>
                                        </div>

                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-user">
                                        <div class="sf-testimonial-media"><img
                                                src="{{ asset('frontend/assets/images/testimonials/pic1.jpg') }}"
                                                alt=""></div>
                                        <div class="sf-testimonial-user-detail">
                                            <div class="sf-testi-user-name">Mark, Homestay </div>
                                            <div class="sf-testi-user-position">Sales Manager</div>
                                        </div>

                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-user">
                                        <div class="sf-testimonial-media"><img
                                                src="{{ asset('frontend/assets/images/testimonials/pic2.jpg') }}"
                                                alt=""></div>
                                        <div class="sf-testimonial-user-detail">
                                            <div class="sf-testi-user-name">Mark, Homestay </div>
                                            <div class="sf-testi-user-position">Sales Manager</div>
                                        </div>

                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-user">
                                        <div class="sf-testimonial-media"><img
                                                src="{{ asset('frontend/assets/images/testimonials/pic3.jpg') }}"
                                                alt=""></div>
                                        <div class="sf-testimonial-user-detail">
                                            <div class="sf-testi-user-name">Mark, Homestay </div>
                                            <div class="sf-testi-user-position">Sales Manager</div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- MAIN SLIDES -->
                            <div class="slick-testimonials-carousel">
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-info text-center">
                                        <div class="sf-testimonial-title">It was a great experience</div>
                                        <div class="sf-ow-pro-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star text-gray"></span>
                                        </div>
                                        <div class="sf-testimonial-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesettin</p>
                                        </div>
                                        <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-info text-center">
                                        <div class="sf-testimonial-title">It was a great experience</div>
                                        <div class="sf-ow-pro-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star text-gray"></span>
                                        </div>
                                        <div class="sf-testimonial-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesettin</p>
                                        </div>
                                        <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-info text-center">
                                        <div class="sf-testimonial-title">It was a great experience</div>
                                        <div class="sf-ow-pro-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star text-gray"></span>
                                        </div>
                                        <div class="sf-testimonial-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesettin</p>
                                        </div>
                                        <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-info text-center">
                                        <div class="sf-testimonial-title">It was a great experience</div>
                                        <div class="sf-ow-pro-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star text-gray"></span>
                                        </div>
                                        <div class="sf-testimonial-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesettin</p>
                                        </div>
                                        <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Testimonial Section END -->

        </div>
        <!-- Content END-->

        <!-- FOOTER START -->
        @include('footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>


    <!-- Login Sign Up Modal -->
    @include('loginmodel')
    <!-- Login Sign Up Modal -->




    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELECT -->
    <script src="{{ asset('frontend/assets/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('frontend/assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('frontend/assets/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script><!-- OWL  SLIDER  -->

    <script src="{{ asset('frontend/assets/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
    <script src="{{ asset('frontend/assets/js/m-custom-scrollbar.min.js') }}"></script><!-- my account left panel scroller -->
    <script src="{{ asset('frontend/assets/js/dropzone.js') }}"></script><!-- Images upload -->

    <script src="{{ asset('frontend/assets/js/bootstrap4-toggle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('frontend/assets/js/lc_lightbox.lite.js') }}"></script><!-- IMAGE POPUP -->
    <script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script><!-- Form js -->

</body>


<!-- Mirrored from aonetheme.com/sf-html-demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:53:49 GMT -->

</html>
