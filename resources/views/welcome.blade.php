<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>

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
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->

        <!-- Include jQuery UI for autocomplete -->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-W8S4D132TB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-W8S4D132TB');
        </script>
        <!-- PAGE TITLE HERE -->
        <title>WisePlix</title>

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
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/modal.css') }}">


        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-21XRZX7MFP"></script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CRHX370RYG"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-CRHX370RYG');
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Quicksand:700&display=swap');

            .modal-dialog {
                overflow-y: initial !important;
                max-width: 700px !important;
                margin: 1.75rem auto 100% auto !important;
            }

            .modal-body {
                /* height: 30vh; */
                overflow-y: auto;
            }

            .otp .height-100 {
                height: 100vh;
            }

            .otp .card {
                width: 400px;
                border: none;
                height: 300px;
                box-shadow: 0px 5px 20px 0px #d2dae3;
                z-index: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .otp .card h6 {
                color: red;
                font-size: 20px;
            }

            .otp .inputs input {
                width: 40px;
                height: 40px;
            }

            .otp input[type="number"]::-webkit-inner-spin-button,
            .otp input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0;
            }

            .otp .card-2 {
                background-color: #fff;
                padding: 10px;
                width: 350px;
                height: 100px;
                bottom: -50px;
                left: 20px;
                position: absolute;
                border-radius: 5px;
            }

            .otp .card-2 .content {
                margin-top: 50px;
            }

            .otp .card-2 .content a {
                color: red;
            }

            .otp .form-control:focus {
                box-shadow: none;
                border: 2px solid red;
            }

            .otp .validate {
                border-radius: 20px;
                height: 40px;
                /* background-color: red;
                border: 1px solid red; */
                width: 140px;
            }

            .form-control {
                height: calc(1em + 0.75rem + 2px) !important;
                padding: 0.2rem 0.75rem !important;
                font-size: 1rem;
                border: none !important;
                border-bottom: 1px solid #d9d9d9 !important;
            }

            .form-check-gender {
                padding-left: 0.25rem !important;
            }


            .category-list {
                position: fixed;
                z-index: 1000;
                width: 75%;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .05);
                box-sizing: border-box;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
                background-color: white;
                color: black;
            }

            #search-list {
                font-size: 15px;
                color: #1b1c23;
                width: 100%;
                padding: 5px 16px 5px 16px;
                box-sizing: border-box;
                display: flex;
                cursor: pointer;
                position: relative;
                z-index: 103;
                background-color: #fff;
            }

            #search-list:hover {
                background-color: #117EFE;
            }

            /* .modal-header {
                background-image: url(https://nl-prod-bucket.s3.ap-south-1.amazonaws.com/images/conn.jpg);
                background-size: cover;
            } */

            .form-check .form-check-input {
                width: 15px;
                display: inline-block;
                float: left;
                height: 20px;
                margin-top: 2px;
                line-height: 28px;
                cursor: pointer;
            }

            #questionandans {
                display: block;
                border: 2px solid #7c7676;
                border-radius: 5px;
                padding: 5px 20px 5px 30px;
                margin: 10px;
                cursor: pointer;
            }

            @media (max-width: 768px) {
                #myModal {
                    width: 85%;
                    /* Adjust the width as needed for mobile devices */
                    max-width: none;
                    left: 30px;
                }

                .search-form{
                    margin-top: 8rem;
                }

                
                .category-list {
                    position: absolute;
                    z-index: 1000;
                    width: 75%;
                    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .05);
                    box-sizing: border-box;
                    border-bottom-left-radius: 5px;
                    border-bottom-right-radius: 5px;
                    background-color: white;
                    color: black;
                }

                .aon-banner-text{margin: 4.5rem auto}
            }

            @media (max-width: 768px) {
                .media {
                    width: 350px;
                    /* Adjust the width as needed for mobile devices */
                    margin: 10px;
                }
            }


            /* */

            .hero__search__form form .select__option {
                position: relative;
                width: 100.5%;
                float: left;
                height: 54px;
                margin: 10px;
            }


            /* Media Query for screens with a maximum width of 768 pixels */

            @media only screen and (max-width: 768px) {
                .hero__search__form form .select__option {
                    /* Adjust your styles for smaller screens here */
                    width: 100%;
                    /* Example change */
                    margin: 10px;
                }
            }

            .input-radio {
                box-shadow: 0px 0px 0px 1px #6d6d6d;
                font-size: 3em;
                width: 15px;
                height: 15px;
                margin-right: 7px;
                border: 4px solid #fff;
                background-clip: border-box;
                border-radius: 50%;
                appearance: none;
                transition: background-color 0.3s, box-shadow 0.3s;
                cursor: pointer;
                ;

            }

            .input-radio:checked {
                box-shadow: 0px 0px 0px 4px #00bcd4;
                background-color: #00bcd4;
            }

            .modal-btn {
                outline: none;
                color: #000;
                padding: 10px 25px;
                letter-spacing: 1px;
                position: relative;
                overflow: hidden;
                cursor: pointer;
                display: inline-table;
                background-color: #00bcd4;
                border: none;
                font-size: 15px;
                transition: 0.5s all ease;
                border-radius: 15px;
            }

            .form-group {
                margin-bottom: 0.25rem !important;
                border: solid 3px black;
                padding: 5px;
                margin: 10px;
                border-radius: 15px;
                /* margin-bottom: 18px !important; */
            }

            #questionandans > .form-check-label{
                position: relative;
                top: -1.8px;
                width: 100%;
                cursor: pointer;
                transition: transform 0.2s ease-in-out;;
            }
            #questionandans:hover {
                border-color: #00bcd4;
            }

            .numberonly{
                background: rgb(0 0 0 / 7%) !important;
            }
            .header-style-1 .header-nav .nav>li>a {
                color: #000;
            }

            .modal-header {
                    background: rgba(0,188,212, .75) !important;

                /* background-image: url('https://as1.ftcdn.net/v2/jpg/01/21/99/80/1000_F_121998032_kLc38p2V6FknaB8i1NCXT61CU0sugVsG.jpg');
                background-size: cover; */
            }
        </style>
        
    </head>

    <body>
        <!-- LOADING AREA START ===== -->
        {{-- <div class="loading-area">
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
        </div> --}}
        <!-- LOADING AREA  END ====== -->

        <div class="page-wraper">

            <!-- HEADER START -->
            <header class="site-header header-style-1 mobile-sider-drawer-menu header-full-width">
                <div class="sticky-header main-bar-wraper  navbar-expand-lg" >
                    <div class="main-bar" style="background: white; border-bottom:1px solid lightgray">

                        <div class="container clearfix">
                            <!--Logo section start-->
                            <div class="logo-header">
                                <div class="logo-header-inner logo-header-one">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('images/logo/wiseplix-logo.png') }}" width="120" alt=""
                                            class="site-logo-has">
                                        <img src="{{ asset('images/logo/wiseplix-logo.png') }}" width="120" alt=""
                                            class="site-logo-sticky">
                                    </a>
                                </div>
                            </div>
                            <!--Logo section End-->

                            <!-- NAV Toggle Button -->
                            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse"
                                type="button" class="navbar-toggler collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar-first"></span>
                                <span class="icon-bar icon-bar-two"></span>
                                <span class="icon-bar icon-bar-three"></span>
                            </button>

                            <!-- MAIN Vav -->
                            <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-start">

                                <ul class=" nav navbar-nav">
                                    <li class="has-child current-menu-item"><a href="{{ url('/') }}">Home</a>
                                    </li>

                                    <li class="has-child">
                                        <a href="">Category</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('category') }}">All Category</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child text-black"><a href="{{ route('blogs') }}">Blog</a>
                                    </li>
                                    <li class="has-child text-black"><a href="{{ url('about-us') }}">About Us</a>
                                    </li>
                                    <li class="has-child text-black"><a href="{{ url('contact-us') }}">Contact Us</a>
                                    </li>
                                    <li class="has-child text-black"><a href="https://play.google.com/store/apps/details?id=com.nlpro.wiseplix">Business professional</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Header Right Section-->
                            <div class="extra-nav header-2-nav">
                                <div class="extra-cell">
                                    @if (Auth::check())
                                        <!--Login-->
                                        <a href="{{ route('user.logout') }}" class="site-button aon-btn-signup m-l20">
                                            <i class="feather-power"></i>Logout
                                        </a>
                                        <!--Sign up-->
                                        <a href="{{ route('profile') }}" class="site-button aon-btn-signup m-l20">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    @else
                                        <!-- If user is not logged in, show login button -->
                                        <a href="{{ route('login') }}" class="site-button aon-btn-signup m-l20">
                                            <i class="fa fa-user"></i>Login
                                        </a>
                                    @endif
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </header>
            <!-- HEADER END -->

            <!-- CONTENT START -->
            <div class="page-content">

                <!-- BANNER SECTION START -->
                <section class="aon-banner-wrap">

                    <!--Left Section-->
                    <div class="aon-banner-outer sf-overlay-wrapper">
                        <div class="aon-banner-pic">
                            <div class="aon-curve-area"></div>
                            <div class="aon-overlay-main" style="opacity:0.85; background-color:rgb(1, 58, 1);"></div>
                            <img src="{{ asset('frontend/assets/images/banner/bnr-pic.jpg') }}" width="1919"
                                height="176" alt="">
                        </div>
                        <div class="aon-banner-text">
                            <div class="container">
                                <div class="aon-bnr-write">
                                    <h2 class="text-top-line">Hire <span class="text-secondry">Experts</span> & </h2>
                                    <h2 class="text-bot-line">Get Your Job Done Within your Budget</h2>

                

                                    <p style="font-weight: 700;color:#fff" class="my-2 pt-3">Didn't find what you're looking for?</p>
                                    <h3 style="font-weight: 800;color:#fff">Give a Miss call on <span style="color: yellow">888-464-6047</span>. We will call you back</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Section-->
                    <div class="aon-find-bar aon-findBar-vertical">
                        <div class="container">
                            <!-- Search Form start-->
                            <div class="search-form shadow" style="border-radius: 12px">
                                <form class="clearfix search-providers" method="get">
                                    <input type="hidden" name="s" value="">

                                    <div class="aon-searchbar-table">

                                        <div class="aon-searchbar-left">
                                            <ul class="clearfix sf-searchfileds-count-5">
                                                <li class="mb-3">
                                                    <label class="mb-2">Category</label>
                                                    <input type="text"
                                                        class="form-control sf-form-control aon-categories-select sf-select-box"
                                                        value="" placeholder="What Services are you looking for?"
                                                        id="categoryInput" />
                                                    <input type="hidden" id="subcategory_id" value=""
                                                        name="subcategory_id">
                                                    <input type="hidden" id="category_id" value=""
                                                        name="category_id">

                                                    <ul class="category-list" id="categorySuggestions"></ul>

                
                                                </li>
                                                <li class="mb-2">
                                                    <label class="mb-2">Pincode</label>
                                                    <input type="text"
                                                        class="form-control sf-form-control aon-categories-select sf-select-box"
                                                        placeholder="Pin Code" id="numberInput" />
                                                    <input type="hidden" id="location_id" value="">
                                                    <input type="hidden" id="pinCodeValue" value="">
                                                    <input type="hidden" id="disticName" value="">
                                                    <input type="hidden" id="stateName" value="">
                                                    <input type="hidden" id="areaName" value="">
                                                    <ul class="category-list" id="addressSuggestions"></ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="aon-searchbar-right">
                                            <button type="button" id="openModalBtn" class="site-button" ><i
                                                    class="fa fa-search"></i> Find Provider</button>
                                        </div>

                                    </div>

                                </form>

                                <div class=" text-center mt-4 mb-2">
                                    <p>Search what you Require, Answer a Few Questions, Get Connected with Top Service
                                        Providers within Your Budget.</p>
                                    <a href="{{ route('category') }}" class="btn btn-secondary">All Categories</a>
                                </div>

                            </div>
                            <!-- Search Form End-->
                        </div>
                    </div>

                </section>
                <!-- BANNER SECTION END -->

                <!-- Services Finder categories -->
                <section class="bg-white aon-categories-area sf-curve-pos">
                    <div class="container">

                        <!--Title Section Start-->
                        <div class="section-head">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <span class="aon-sub-title">categories</span>
                                    <h2 class="aon-title">Popular Categories</h2>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p>Search what you Require, Answer a Few Questions, Get Connected with Top Service
                                        Providers within Your Budget.</p>
                                    <a href="{{ route('category') }}" class="btn btn-secondary">Browse All</a>
                                </div>
                            </div>
                        </div>
                        <!--Title Section End-->

                        <div class="section-content">
                            <div class="owl-carousel categories-carousel-owl aon-owl-arrow">
                                <!-- COLUMNS 1 -->
                                @foreach ($data as $item)
                                {{-- {{$item->slug}} --}}
                                    <div class="item">
                                        <div class="aon-cat-item">
                                            <div class="aon-cat-pic media-bg-animate shine-hover">
                                                <a class="shine-box"
                                                    href="{{ route('category.view', $item->slug) }}">
                                                    
                                                    <img src="{{asset('images/category-icons/'.$item->cat_image)}}" alt="" class="mw-100">
                                                    {{-- <img
                                                        src="https://wiseplix-prod.s3.ap-south-1.amazonaws.com/Images/category_image/{{ $item->upload_category_image }}"
                                                        alt="">
                                                    </a> --}}
                                                    </a>
                                            </div>
                                            <h4 class="aon-cat-title">{{ $item->alt_name }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Services Finder categories END -->

                <!-- How it Work -->
                <section class="bg-white aon-how-service-area sf-curve-pos">
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
                                                        <p> You Find the List of Professional Near You Choose the best.</p>
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
                <div class="site-bg-primary aon-statics-area sf-curve-pos">
                    <div class="container">

                        <div class="section-content">
                            <div class="row d-flex flex-wrap align-items-center a-b-none">
                                <div class="col-lg-6 col-md-12">
                                    <!--Title Section Start-->
                                    <div class="section-head">
                                        <span class="aon-sub-title">Statics</span>
                                        <h2 class="sf-title">Trusted by thousands of people all over the world</h2>
                                        <p>Our Services are Loved by everyone and that shows by our Numbers we are Growing
                                            Every day Be the part of this amazing Growth. </p>
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
                                                        <div class="aon-company-static-num counter aon-icon">360</div>
                                                        <div class="aon-company-static-name">Providers</div>
                                                    </div>
                                                </div>
                                                <div class="media-bg-animate media-statics aon-icon-effect">
                                                    <div class="aon-static-section aon-t-yellow">
                                                        <div class="aon-company-static-num counter aon-icon">4008</div>
                                                        <div class="aon-company-static-name">Jobs</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Block 2-->
                                            <div class="col-lg-6 m-b30 aon-static-position-2">
                                                <div class="media-bg-animate media-statics aon-icon-effect">
                                                    <div class="aon-static-section aon-t-green">
                                                        <div class="aon-company-static-num counter aon-icon">5890</div>
                                                        <div class="aon-company-static-name">Customer</div>
                                                    </div>
                                                </div>
                                                <div class="media-bg-animate media-statics aon-icon-effect">
                                                    <div class="aon-static-section aon-t-skyblue">
                                                        <div class="aon-company-static-num counter aon-icon">59</div>
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

                <!-- Latest Blog -->
                <div class="aon-news-section-wrap sf-curve-pos">
                    <div class="container">
                        <!--Title Section Start-->
                        <div class="section-head">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <span class="aon-sub-title">News</span>
                                    <h2 class="sf-title">Recent News Articles</h2>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                </div>
                            </div>
                        </div>
                        <!--Title Section End-->

                        <div class="section-content">
                            <div class="row">
                                @foreach ($blog as $item)
                                    <div class="col-md-4">
                                        <div class="media-bg-animate">
                                            <div class="aon-blog-section-1 shine-hover">
                                                <div class="aon-post-media shine-box">
                                                    <a href="{{ route('blos.details', $item->slug) }}"><img
                                                            src="{{ asset($item->blogs_image) }}" alt=""></a>
                                                </div>
                                                <div class="aon-post-meta">
                                                    <ul>
                                                        <li class="aon-post-category">Latest</li>
                                                        <li class="aon-post-author"><a
                                                                href="{{ route('blos.details', $item->slug) }}">By
                                                                |<span>{{ $item->created_by }}</span></a> </li>
                                                    </ul>
                                                </div>
                                                <div class="aon-post-info">
                                                    <h4 class="aon-post-title"><a
                                                            href="{{ route('blos.details', $item->slug) }}">{{ $item->title }}</a>
                                                    </h4>
                                                    <div class="aon-post-text">
                                                        <a href="{{ route('blos.details', $item->slug) }}"
                                                            class="btn btn-dark">Readmore</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest Blog END -->

                <!-- Why Choose us -->
                <div class="aon-whycoose-area sf-curve-pos">
                    <div class="container-fluid">
                        <div class="sf-whycoose-section">
                            <div class="row sf-w-choose-bg-outer d-flex flex-wrap a-b-none">
                                <!-- Left Section -->
                                <div class="col-md-7 margin-b-50 sf-w-choose-left-cell">
                                    <div class="sf-w-choose-info-left">
                                        <!--Title Section Start-->
                                        <div class="section-head">
                                            <div class="row">
                                                <div class="col-md-12  margin-b-50">
                                                    <span class="aon-sub-title">Choose</span>
                                                    <h2 class="sf-title">Why Choose us</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Title Section End-->

                                        <!-- COLUMNS 1 -->
                                        <div class="sf-w-choose margin-b-20">
                                            <div class="sf-w-choose-icon">
                                                <span>
                                                    <img src="{{ asset('frontend/assets/images/whychoose/1.png') }}"
                                                        alt="">
                                                </span>
                                            </div>
                                            <div class="sf-w-choose-info">
                                                <h4 class="sf-title">Trusted Providers</h4>
                                                <p>We understand the importance of working with trusted, reliable service
                                                    providers. That's why we carefully vet all providers on our platform to
                                                    ensure they meet our stringent quality standards. You can rest assured
                                                    knowing that you're working with professionals who are committed to
                                                    delivering exceptional service.</p>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 2 -->
                                        <div class="sf-w-choose margin-b-20">
                                            <div class="sf-w-choose-icon">
                                                <span>
                                                    <img src="{{ asset('frontend/assets/images/whychoose/2.png') }}"
                                                        alt="">
                                                </span>
                                            </div>
                                            <div class="sf-w-choose-info">
                                                <h4 class="sf-title">Seamless Experience</h4>
                                                <p>We believe in making the process of finding and hiring service providers
                                                    as seamless and hassle-free as possible. Our platform is designed with
                                                    user experience in mind, offering a streamlined interface that makes it
                                                    easy to find, compare, and connect with providers in just a few clicks.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 3 -->
                                        <div class="sf-w-choose">
                                            <div class="sf-w-choose-icon">
                                                <span>
                                                    <img src="{{ asset('frontend/assets/images/whychoose/3.png') }}"
                                                        alt="">
                                                </span>
                                            </div>
                                            <div class="sf-w-choose-info">
                                                <h4 class="sf-title">Wide Range of Services</h4>
                                                <p>Whatever your needs may be, WisePlix has you covered. From home services
                                                    like plumbing and electrical work to professional services like graphic
                                                    design and marketing, we offer a wide range of categories to ensure that
                                                    you can find exactly what you're looking for.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="col-md-5 sf-w-choose-bg-wrap sf-w-choose-right-cell">
                                    <div class="sf-w-choose-bg"
                                        style="background-image: url({{ asset('frontend/assets/images/background/bg1.jpg') }});">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Why Choose us END -->


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
                                    <p></p>
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
                                            <div class="sf-testimonial-media">
                                                <img src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI="
                                                    alt="">
                                            </div>
                                            <div class="sf-testimonial-user-detail">
                                                <div class="sf-testi-user-name">Sunil</div>
                                                <div class="sf-testi-user-position">Sales Manager</div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- COLUMNS 1 -->
                                    <div class="slick-item">
                                        <div class="sf-testimonial-user">
                                            <div class="sf-testimonial-media"><img
                                                    src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI="
                                                    alt=""></div>
                                            <div class="sf-testimonial-user-detail">
                                                <div class="sf-testi-user-name">Subramanya Raju</div>
                                                <div class="sf-testi-user-position">Sales Manager</div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- COLUMNS 1 -->
                                    <div class="slick-item">
                                        <div class="sf-testimonial-user">
                                            <div class="sf-testimonial-media"><img
                                                    src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI="
                                                    alt=""></div>
                                            <div class="sf-testimonial-user-detail">
                                                <div class="sf-testi-user-name">Om Prakash </div>
                                                <div class="sf-testi-user-position">Sales Manager</div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- COLUMNS 1 -->
                                    <div class="slick-item">
                                        <div class="sf-testimonial-user">
                                            <div class="sf-testimonial-media"><img
                                                    src="https://media.istockphoto.com/id/1337144146/vector/default-avatar-profile-icon-vector.jpg?s=612x612&w=0&k=20&c=BIbFwuv7FxTWvh5S3vB6bkT0Qv8Vn8N5Ffseq84ClGI="
                                                    alt=""></div>
                                            <div class="sf-testimonial-user-detail">
                                                <div class="sf-testi-user-name">Abhilash Gurudeva </div>
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
                                                <p>"I've used Wiseplix.com twice, and I gotta say, they're pretty awesome!
                                                    Got quick responses both times that totally impressed me. If you want a
                                                    hassle-free experience, Wiseplix.com is the way to go – they've got your
                                                    back!"</p>
                                            </div>
                                            <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 1 -->
                                    <div class="slick-item">
                                        <div class="sf-testimonial-info text-center">
                                            <div class="sf-testimonial-title">Amazing experience</div>
                                            <div class="sf-ow-pro-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star text-gray"></span>
                                            </div>
                                            <div class="sf-testimonial-text">
                                                <p>"Seriously, one of the most straightforward experiences I've ever had
                                                    online! If you're looking for business professionals, Wiseplix.com is my
                                                    top recommendation. They make the whole search thing a breeze!"</p>
                                            </div>
                                            <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 1 -->
                                    <div class="slick-item">
                                        <div class="sf-testimonial-info text-center">
                                            <div class="sf-testimonial-title">Highly recommended</div>
                                            <div class="sf-ow-pro-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star text-gray"></span>
                                            </div>
                                            <div class="sf-testimonial-text">
                                                <p>"Awesome service, I'd totally vouch for it. Such an easy way to find the
                                                    right professional you need. Wiseplix.com is the way to go!"</p>
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
            <!-- CONTENT END -->

            <!-- FOOTER START -->
            @include('footer')
            <!-- FOOTER END -->

            <!-- BUTTON TOP START -->
            <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        </div>



        <!-- Login Sign Up Modal -->
        <div class="modal fade" id="login-signup-model">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close aon-login-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">

                        <div class="sf-custom-tabs sf-custom-new aon-logon-sign-area p-3">

                            <!--Tabs-->
                            <ul class="nav nav-tabs nav-table-cell">
                                <li><a data-toggle="tab" href="#Upcoming" class="active">Login</a></li>
                                <li><a data-toggle="tab" href="#Past">Sign up</a></li>
                            </ul>
                            <!--Tabs Content-->
                            <div class="tab-content">

                                <!--Login Form-->
                                <div id="Upcoming" class="tab-pane active">
                                    <div class="sf-tabs-content">
                                        <form class="aon-login-form" action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="aon-inputicon-box">
                                                            <input class="form-control sf-form-control" name="email"
                                                                type="text" placeholder="User Name">
                                                            <i class="aon-input-icon fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="aon-inputicon-box">
                                                            <input class="form-control sf-form-control" name="password"
                                                                type="password" placeholder="Password">
                                                            <i class="aon-input-icon fa fa-lock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div
                                                        class="form-group d-flex aon-login-option justify-content-between">
                                                        <div class="aon-login-opleft">
                                                            <div class="checkbox sf-radio-checkbox">
                                                                <input id="td2_2" name="abc" value="five"
                                                                    type="checkbox">
                                                                <label for="td2_2">Keep me logged</label>
                                                            </div>
                                                        </div>
                                                        <div class="aon-login-opright">
                                                            <a href="#">Forget Password</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button w-100">Submit <i
                                                            class="feather-arrow-right"></i> </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!--Sign up Form-->
                                <div id="Past" class="tab-pane">
                                    <div class="sf-tabs-content">
                                        <form class="aon-login-form" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="aon-inputicon-box">
                                                            <input class="form-control sf-form-control" name="name"
                                                                type="text" placeholder="Full Name">
                                                            <i class="aon-input-icon fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="aon-inputicon-box">
                                                            <input class="form-control sf-form-control" name="mobile"
                                                                type="tel" pattern="\d{10}" maxlength="10"
                                                                placeholder="Phone">
                                                            <i class="aon-input-icon fa fa-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="aon-inputicon-box">
                                                            <input class="form-control sf-form-control" name="email"
                                                                type="email" placeholder="Email">
                                                            <i class="aon-input-icon fa fa-envelope-o"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="aon-inputicon-box">
                                                            <input class="form-control sf-form-control" name="password"
                                                                type="password" placeholder="Password">
                                                            <i class="aon-input-icon fa fa-lock"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="aon-inputicon-box">
                                                            <input class="form-control sf-form-control"
                                                                name="password_confirmation" type="password"
                                                                placeholder="Confirm Password">
                                                            <i class="aon-input-icon fa fa-lock"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group sign-term-con">
                                                        <div class="checkbox sf-radio-checkbox">
                                                            <input id="td33" name="abc" value="five"
                                                                type="checkbox">
                                                            <label for="td33">I've read and agree with your <a
                                                                    href="#">Privacy Policy</a> and <a
                                                                    href="#">Terms & Conditions</a> </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button w-100">Submit <i
                                                            class="feather-arrow-right"></i> </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Login Sign Up Modal -->

        <!-- Popup-modal -->
        <div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel"
            aria-hidden="true"
            style="margin-top:71px; overflow:hidden; position: fixed; ; background-color: rgb(155 150 150 / 50%); "
            data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header py-4">
                        <button type="button" class="close" id="closeButton" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body" style="padding: 0.5rem;">
                            <div class="heading my-3"
                                style=" display:none;border: 1px solid; border-radius: 5px; padding: 10px 0px 0px 0px;"
                                id="header-menu">
                                <h5 class="text-center py-2">
                                    Your Just a few steps Away to connect with your budget friendly professional.</h5>
                            </div>
                            
                            <div class="heading"
                                style="border: 1px solid; display:none; border-radius: 5px; padding: 10px 0px 0px 0px;"
                                id="header1">
                                <h5 class="text-center "
                                    style="text-align: center; font-size: large; ; margin-bottom: 10px;">
                                    Great News, You're almost there!</h5 >
                            </div>

                            <p class="error" style="color:red" id="error"> </p>

                            <h3 class="success" style="color:green" id="success"></h3>

                            <h4 id="question-text" class="my-3 py-2" style="margin-left:10px;font-weight: 700;"></h4>

                            <form id="options-form">
                            </form>
                            
                            <form id="textForm" style="display: none;">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-check-label"
                                        style="font-weight: 700;">Additional Info</label>
                                    <textarea class="form-control" style="height:65px !important" id="otherDetails" rows="3"></textarea>
                                </div>
                            </form>

                            <form id="detail-form" style="display: none;">
                                <div class="form-group border-0 p-0" style="margin-bottom: 18px !important;">
                                    {{-- <label style="font-weight: 700;">Your Name</label> --}}
                                    <input type="text" class="form-control" value="" id="userName"
                                        aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group border-0 p-0" style="margin-bottom: 18px !important;">
                                    {{-- <label style="font-weight: 700;">Email ID</label> --}}
                                    <input type="email" class="form-control" value="" id="userEmail"
                                        placeholder="Enter Your Email" required>
                                </div>
                                <div class="form-check-gender border-0 p-0">
                                    {{-- <label style="font-weight: 700;">Select Your Gender</label> --}}
                                    <select id="userGender" value="" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </form>
                            <form id="verifyMobile" style="display: none;">
                                <h3 class="text-dark text-center" style="">Your number is safe with us.</h3>
                                <p class="text-dark fs-4 text-center" style="font-family:gorditamedium">Some matches
                                    prefer to provide quotes over the phone to get more details.</p>

                                <div class="form-group">
                                    <!-- <label class="form-check-label" style="font-weight: 700;">Mobile Number</label> -->
                                    <input type="text" class="form-control" id="mobileNumber"
                                        placeholder="+91-9999999999">
                                </div>
                                <small>Please enter 10 digit mobile no.</small>
                            </form>
                            <div id="submitOtp" style="display: none;">
                                <div class="container otp height-100 d-flex justify-content-center align-items-center">
                                    <div class="position-relative">
                                        <div class="card p-2 text-center my-4" id="validateOtp">
                                            <h4 class="success" style="color:green" id="success1"></h4>
                                            <h6>Please enter the one time password <br> to verify your account</h6>
                                            {{-- <div><span>A code has been sent to</span>
                                                <small id="mobileNumber"></small>
                                            </div> --}}
                                            <div id="otp"
                                                class="inputs d-flex flex-row justify-content-center mt-2">
                                                <input type="text"
                                                    class="m-1 text-center form-control rounded numberonly bx-input"
                                                    id="first" name="firstBx" maxlength="1"
                                                    oninput='digitValidate(this)' onkeyup='tabChange(1)' required>
                                                <input type="text"
                                                    class="m-1 text-center form-control rounded numberonly bx-input"
                                                    id="second" name="secondBx" maxlength="1"
                                                    oninput='digitValidate(this)' onkeyup='tabChange(2)' required>
                                                <input type="text"
                                                    class="m-1 text-center form-control rounded numberonly bx-input"
                                                    id="third" name="thirdBx" maxlength="1"
                                                    oninput='digitValidate(this)' onkeyup='tabChange(3)' required>
                                                <input type="text"
                                                    class="m-1 text-center form-control rounded numberonly bx-input"
                                                    id="fourth" name="fourBx" maxlength="1"
                                                    oninput='digitValidate(this)' onkeyup='tabChange(4)' required>
                                                <input type="text"
                                                    class="m-1 text-center form-control rounded numberonly bx-input"
                                                    id="fifth" name="fifthBx" maxlength="1"
                                                    oninput='digitValidate(this)' onkeyup='tabChange(5)' required>
                                                <input type="text"
                                                    class="m-1 text-center form-control rounded numberonly bx-input"
                                                    id="sixth" name="sixBx" maxlength="1"
                                                    oninput='digitValidate(this)' onkeyup='tabChange(6)' required>
                                            </div>

                                            <button class="btn" id="edit_mobile">Edit Mobile</button>
                                            <div class="mt-4 text-center" >
                                                <div>
                                                    <button class="btn btn-dark px-4 validate" id="validate">Validate</button>
                                                </div>
                                                
                                                <button type="button" style="background: transparent;font-size:12px" class="border-0 my-3" id="ResendOtp"><u>Resend OTP</u></button>
                                            </div>
                                        </div>
                                        <div class="card p-2 text-center" style="display: none;" id="validateSuccess">
                                            <p style="color: green;">OTP Validate Success</p>
                                        </div>
                                        <div class="card p-2 text-center" style="display: none;" id="thanks2">
                                            <p style="color: red;">Happy to see you back, Hope your enjoying your
                                                experience we look forward to serving you better, Go ahead post your
                                                requirement.</p>
                                        </div>
                                        <div class="card p-2 text-center my-4" style="display: none;" id="thanks">
                                            <div class="card-body">

                                            <h3 style="font-weight: 600;" class="my-3">Your request is submitted successfully.</h3>
                                            <h6 class="" style="font-weight: 500; line-height:1.2">Our service partners will reach out to you soon kindly provide them your
                                                compelte requirement they will give you the best service in good budget</h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border-top: 0 none;">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_button">Close</button> -->
                            <button type="button" class="btn btn-info" id="next-button">Next</button>
                            <button type="button" class="btn btn-info" style="display: none;"
                                id="submit-button">Next</button>
                            <div style="display:none" id="Verify-mobile">
                                <button type="button" class="btn btn-info" id="Verify-Otp">Verify</button>
                            </div>
                            <button type="button" class="btn btn-info" style="display: none;"
                                id="submitData1">Submit</button>
                            <button type="button" class="btn btn-info" style="display: none;"
                                id="submit-button2">Next</button>
                            <button type="button" class="btn btn-info" style="display: none;"
                                id="submitData">Submit</button>
                            <button type="button" class="btn btn-info" style="display: none;"
                                id="submit-button1">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="thankYouMdl" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="thankYouMdlLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        
                        <p style="font-size: 19px;font-weight: 600;font-family: sans-serif;color: #333; margin-top: 26px;" id="leadReqSuccessMsg"></p>
                        
                        <h3 style="/* line-height: 1px; */ color: #098209;
                        font-size: 26px;
                        margin-top: 30px;
                        font-family: cursive;">Thank You!</h3>
                    
                        <div style="
                        display: flex;
                        justify-content: end;
                        margin-bottom: 5px;
                        margin-right: 10px;
                    ">
                            <p style="
                            font-size: small;
                            font-family: cursive;
                            color: white;
                            background: black;
                            display: inline;
                            padding: 2px;
                            margin-bottom: 5px;
                        ">Powered By Wiseplix</p>
                        </div>
                        
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary btn-lg" style="background-color: #00bcd4;border-color: white;" data-dismiss="modal" id="okeyButton">Okey!</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- close Popup Modal -->
        <!-- JAVASCRIPT  FILES ========================================= -->
        <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
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

</html>
