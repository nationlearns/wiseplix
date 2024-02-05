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
    <link rel="icon" href="{{asset('frontend/assets/images/favicon.html')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.png')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script  src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script><!-- JQUERY.MIN JS -->

    <!-- Include jQuery UI for autocomplete -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">     
    <!-- PAGE TITLE HERE -->
    <title>WisePlix</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap4-toggle.min.css')}}">
    <!-- Bootstrap seclect -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}" />
    <!-- Price Range Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-slider.min.css')}}" />
    <!-- Bootstrap data table -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/dataTables.bootstrap4.min.css')}}">
    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/dropzone.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font.css')}}" />
    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/feather.css')}}" />
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" />
    <!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/lc_lightbox.css')}}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/m-custom-scrollbar.min.css')}}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick.min.css')}}">
    <!-- Slick Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick-theme.css')}}">
    <!-- Main STyle Sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">

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

	<div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1 mobile-sider-drawer-menu header-full-width">
            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">

                    <div class="container clearfix">
                        <!--Logo section start-->
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('frontend/assets/images/logo-light.png')}}" alt="" class="site-logo-has">
                                    <img src="{{asset('frontend/assets/images/logo-dark.png')}}" alt="" class="site-logo-sticky">
                                </a>
                            </div>
                        </div>
                        <!--Logo section End-->

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-start">

                            <ul class=" nav navbar-nav">
                                <li class="has-child current-menu-item"><a href="{{url('/')}}">Home</a>
                                </li>

                                <li class="has-child">
                                    <a href="">Category</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('category')}}">All Category</a></li>
                                    </ul>
                                </li>
                                <li class="has-child"><a href="">Blog</a>
                                </li>
                                <li class="has-child"><a href="{{url('about-us')}}">About Us</a>
                                </li>

                                <li class="has-child"><a href="{{url('contact-us')}}">Contact Us</a>
                                </li>

                            </ul>

                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <!--Login-->
                                <button type="button" class="site-button aon-btn-login" data-toggle="modal" data-target="#login-signup-model">
                                    <i class="fa fa-user"></i> Login
                                </button>
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
                        <div class="aon-overlay-main" style="opacity:0.85; background-color:#022278;"></div>
                        <img src="{{asset('frontend/assets/images/banner/bnr-pic.jpg')}}" width="1919" height="976" alt="">
                    </div>
                    <div class="aon-banner-text">
                        <div class="container">
                            <div class="aon-bnr-write">
                                <h2 class="text-top-line">Hire <span class="text-secondry">Experts</span> & </h2>
                                <h2 class="text-bot-line">Get Your Job Done</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Right Section-->
                <div class="aon-find-bar aon-findBar-vertical">
                  <div class="container">
                    <!-- Search Form start-->
                    <div class="search-form ">
                      <form class="clearfix search-providers" method="get">
                        <input type="hidden" name="s" value="">

                          <div class="aon-searchbar-table">

                          <div class="aon-searchbar-left">
                            <ul class="clearfix sf-searchfileds-count-5">
                              <li>
                                <label>Category</label>
                                <input type="text" class="form-control sf-form-control aon-categories-select sf-select-box" value="" placeholder="What Services are you looking for?" id="categoryInput" />
                                <input type="hidden" id="subcategory_id" value="" name="subcategory_id">
                                <ul class="category-list" id="categorySuggestions"></ul>

                                <!-- <select id="categorysrh" name="catid" class="form-control sf-form-control aon-categories-select sf-select-box" title="Select Category">
                                    <option class="bs-title-option" value="">Select a Category</option>
                                    <option value="17">Cab Service</option>
                                    <option value="30" data-content="<img class='childcat-img' width='50' height='auto' src={{asset('frontend/assets/images/cat-thum/cat-2.jpg')}}>
                                      <span class='childcat'>Car Dealers</span>">Car Dealers
                                    </option>
                                    <option value="19" data-content="<img class='childcat-img' width='50' height='auto' src={{asset('frontend/assets/images/cat-thum/cat-3.jpg')}}>
                                      <span class='childcat'>Food & Drink</span>">Food & Drink
                                    </option>
                                    <option value="19" data-content="<img class='childcat-img' width='50' height='auto' src={{asset('frontend/assets/images/cat-thum/cat-4.jpg')}}>
                                      <span class='childcat'>Plumber</span>">Plumber
                                    </option>
                                    <option value="19" data-content="<img class='childcat-img' width='50' height='auto' src={{asset('frontend/assets/images/cat-thum/cat-5.jpg')}}>
                                      <span class='childcat'>Electrician</span>">Electrician
                                    </option>
                                  </select> -->
                                <span class="sf-search-icon"><img src="{{asset('frontend/assets/images/search-bar/maintenance.png')}}" alt=""/></span>
                              </li>
                              <li>
                                <label>Pincode</label>
                                <input type="text" class="form-control sf-form-control aon-categories-select sf-select-box" placeholder="Pin Code" id="numberInput" />
                                <input type="hidden" id="location_id" value="">
                                <input type="hidden" id="pinCodeValue" value ="">
                                        <input type="hidden" id="disticName" value ="">
                                        <input type="hidden" id="stateName" value ="">
                                        <ul class="category-list" id="addressSuggestions"></ul>
                                <!-- <select class="sf-select-box form-control sf-form-control bs-select-hidden" data-live-search="true" name="country" id="country" title="Country" data-header="Select a Country">
                                  <option class="bs-title-option" value="">Select Country</option>
                                  <option value="">Select Country</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="United States">United States</option>
                                </select> -->
                                <span class="sf-search-icon"><img src="{{asset('frontend/assets/images/search-bar/globe.png')}}" alt=""/></span>
                              </li>
                            </ul>
                          </div>
                          <div class="aon-searchbar-right">
                            <button type="button" id="openModalBtn" class="site-button"><i class="fa fa-search"></i> Find Provider</button>
                          </div>

                        </div>

                      </form>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!--Title Section End-->

                    <div class="section-content">
                        <div class="owl-carousel categories-carousel-owl aon-owl-arrow">
                            <!-- COLUMNS 1 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="{{asset('frontend/assets/images/popular-categories/1.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Food & Drink</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="{{asset('frontend/assets/images/popular-categories/2.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Plumber</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="{{asset('frontend/assets/images/popular-categories/3.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Cleaning Services</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="figure" href="categories-detail.html"><img src="{{asset('frontend/assets/images/popular-categories/4.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Yoga Classes</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="{{asset('frontend/assets/images/popular-categories/5.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Salon & Spa</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="{{asset('frontend/assets/images/popular-categories/6.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Gym</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="{{asset('frontend/assets/images/popular-categories/7.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Transport</h4>
                                </div>
                            </div>
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
                                                        <i class="aon-icon"><img src="{{asset('frontend/assets/images/step-icon/1.png')}}" alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title">Describe Your Task</h4>
                                                    <p>This helps us determine which Taskers are abest job.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COLUMNS 2 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section step-position-2 aon-icon-effect">
                                                <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="{{asset('frontend/assets/images/step-icon/2.png')}}" alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title">Choose a Tasker</h4>
                                                    <p>This helps us determine which Taskers are abest job.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COLUMNS 3 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section  step-position-3  aon-icon-effect">
                                                <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="{{asset('frontend/assets/images/step-icon/3.png')}}" alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title">Live Smarter</h4>
                                                    <p>This helps us determine which Taskers are abest job.</p>
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

            <!-- Featued Vender -->
            <section class="site-bg-gray aon-feature-provider-area sf-curve-pos">
                <div class="container">
                    <!--Title Section Start-->
                    <div class="section-head">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <span class="aon-sub-title">Vendor</span>
                                <h2 class="sf-title">Featured Providers</h2>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!--Title Section End-->

                    <div class="section-content">
                        <div class="row">
                            <div class="owl-carousel aon-featurd-provider-carousel aon-owl-arrow">

                                <!-- COLUMNS 1 -->
                                <div class="item">
                                    <div class="aon-ow-provider-wrap">
                                        <div class="aon-ow-provider shine-hover">

                                            <div class="aon-ow-top">
                                                <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                <div class="aon-ow-info">
                                                    <h4 class="aon-title"><a href="profile-full.html"> Edward Luise</a></h4>
                                                    <span>Queens, United States</span>
                                                </div>
                                            </div>
                                            <div class="aon-ow-mid">
                                                <div class="aon-ow-media media-bg-animate">
                                                    <a href="profile-full.html" class="shine-box"><img src="{{asset('frontend/assets/images/providers/1.jpg')}}" alt=""></a>
                                                </div>
                                                <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                                <div class="aon-ow-pro-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star text-gray"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aon-ow-bottom">
                                            <a href="profile-full.html">Request A Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="item">
                                    <div class="aon-ow-provider-wrap">
                                        <div class="aon-ow-provider shine-hover">

                                            <div class="aon-ow-top">
                                                <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                <div class="aon-ow-info">
                                                    <h4 class="aon-title"><a href="profile-full.html">Javier Bardem</a></h4>
                                                    <span>Queens, United States</span>
                                                </div>
                                            </div>
                                            <div class="aon-ow-mid">
                                                <div class="aon-ow-media media-bg-animate">
                                                    <a href="profile-full.html" class="shine-box"><img src="{{asset('frontend/assets/images/providers/2.jpg')}}" alt=""></a>
                                                </div>
                                                <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                                <div class="aon-ow-pro-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star text-gray"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aon-ow-bottom">
                                            <a href="profile-full.html">Request A Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="item">
                                    <div class="aon-ow-provider-wrap">
                                        <div class="aon-ow-provider shine-hover">

                                            <div class="aon-ow-top">
                                                <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                <div class="aon-ow-info">
                                                    <h4 class="aon-title"><a href="profile-full.html">Mila Kunis</a></h4>
                                                    <span>Queens, United States</span>
                                                </div>
                                            </div>
                                            <div class="aon-ow-mid">
                                                <div class="aon-ow-media media-bg-animate">
                                                    <a class="shine-box" href="profile-full.html"><img src="{{asset('frontend/assets/images/providers/3.jpg')}}" alt=""></a>
                                                </div>
                                                <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                                <div class="aon-ow-pro-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star text-gray"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aon-ow-bottom">
                                            <a href="profile-full.html">Request A Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="item">
                                    <div class="item">
                                        <div class="aon-ow-provider-wrap">
                                            <div class="aon-ow-provider shine-hover">

                                                <div class="aon-ow-top">
                                                    <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                    <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="aon-ow-info">
                                                        <h4 class="aon-title"><a href="profile-full.html">Edward Luise</a></h4>
                                                        <span>Queens, United States</span>
                                                    </div>
                                                </div>
                                                <div class="aon-ow-mid">
                                                    <div class="aon-ow-media media-bg-animate">
                                                        <a href="profile-full.html" class="shine-box"><img src="{{asset('frontend/assets/images/providers/4.jpg')}}" alt=""></a>
                                                    </div>
                                                    <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                                    <div class="aon-ow-pro-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star text-gray"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="aon-ow-bottom">
                                                <a href="profile-full.html">Request A Quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Featued Vender -->

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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
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
                                                    <div class="aon-company-static-name">Jobs</div>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!--Title Section End-->

                    <div class="section-content">
                        <div class="row">

                            <!-- COLUMNS 1 -->
                            <div class="col-md-4">
                                <div class="media-bg-animate">
                                    <div class="aon-blog-section-1 shine-hover">
                                        <div class="aon-post-media shine-box">
                                            <a href="blog-detail.html"><img src="{{asset('frontend/assets/images/blog/latest-blog1/1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="aon-post-meta">
                                            <ul>
                                                <li class="aon-post-category">Latest</li>
                                                <li class="aon-post-author"><a href="blog-detail.html">By |<span>Admin</span></a> </li>
                                            </ul>
                                        </div>
                                        <div class="aon-post-info">
                                            <h4 class="aon-post-title"><a href="blog-detail.html">Helping Companies in their Green.</a></h4>
                                            <div class="aon-post-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4">
                                <div class="media-bg-animate">
                                    <div class="aon-blog-section-1 shine-hover">

                                        <div class="aon-post-media shine-box">
                                            <a href="blog-detail.html"><img src="{{asset('frontend/assets/images/blog/latest-blog1/2.jpg')}}" alt=""></a>
                                        </div>

                                        <div class="aon-post-meta">
                                            <ul>
                                                <li class="aon-post-category">Latest</li>
                                                <li class="aon-post-author"><a href="blog-detail.html">By |<span>Admin</span></a> </li>
                                            </ul>
                                        </div>

                                        <div class="aon-post-info">
                                            <h4 class="aon-post-title"><a href="blog-detail.html">There are two thing is very important.</a></h4>
                                            <div class="aon-post-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4">
                                <div class="media-bg-animate">
                                    <div class="aon-blog-section-1  shine-hover">
                                        <div class="aon-post-media shine-box">
                                            <a href="blog-detail.html"><img src="{{asset('frontend/assets/images/blog/latest-blog1/3.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="aon-post-meta">
                                            <ul>
                                                <li class="aon-post-category">Latest</li>
                                                <li class="aon-post-author"><a href="blog-detail.html">By |<span>Admin</span></a> </li>
                                            </ul>
                                        </div>
                                        <div class="aon-post-info">
                                            <h4 class="aon-post-title"><a href="blog-detail.html">Officia deserunt mollit anim id labrum.</a></h4>
                                            <div class="aon-post-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Title Section End-->

                                    <!-- COLUMNS 1 -->
                                    <div class="sf-w-choose margin-b-20">
                                        <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="{{asset('frontend/assets/images/whychoose/1.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="sf-w-choose-info">
                                            <h4 class="sf-title">Meet new customers</h4>
                                            <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 2 -->
                                    <div class="sf-w-choose margin-b-20">
                                        <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="{{asset('frontend/assets/images/whychoose/2.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="sf-w-choose-info">
                                            <h4 class="sf-title">Grow your revenue</h4>
                                            <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 3 -->
                                    <div class="sf-w-choose">
                                        <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="{{asset('frontend/assets/images/whychoose/3.png')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="sf-w-choose-info">
                                            <h4 class="sf-title">Build your online reputation</h4>
                                            <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Right Section -->
                            <div class="col-md-5 sf-w-choose-bg-wrap sf-w-choose-right-cell">
                                <div class="sf-w-choose-bg" style="background-image: url({{asset('frontend/assets/images/background/bg1.jpg')}});"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose us END -->

            <!-- Jobs Section -->
            <div class="aon-recent-post-area sf-curve-pos">
                <div class="container">
                    <!--Title Section Start-->
                    <div class="section-head">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <span class="aon-sub-title">Jobs</span>
                                <h2 class="sf-title">Recently Posted Jobs</h2>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!--Title Section End-->


                    <div class="section-content">
                        <div class="sf-blog-section-1-wrap">
                            <div class="row">
                                <!-- COLUMNS 1 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="media-bg-animate">
                                        <div class="sf-jobs-section">

                                            <div class="sf-jobs-head">
                                                <a href="job-detail.html" class="sf-jobs-media"><img src="{{asset('frontend/assets/images/jobs/1.jpg')}}" alt=""></a>
                                                <span class="sf-jobs-position">Freelance</span>
                                            </div>

                                            <div class="sf-jobs-info">
                                                <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                                <h4 class="sf-title"><a href="job-detail.html">Account Executive Required</a></h4>
                                                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                            </div>

                                            <div class="sf-jobs-footer">
                                                <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                                <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="media-bg-animate">
                                        <div class="sf-jobs-section">

                                            <div class="sf-jobs-head">
                                                <a href="job-detail.html" class="sf-jobs-media"><img src="{{asset('frontend/assets/images/jobs/2.jpg')}}" alt=""></a>
                                                <span class="sf-jobs-position">Freelance</span>
                                            </div>

                                            <div class="sf-jobs-info">
                                                <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                                <h4 class="sf-title"><a href="job-detail.html">Project Manager Required</a></h4>
                                                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                            </div>

                                            <div class="sf-jobs-footer">
                                                <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                                <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="media-bg-animate">
                                        <div class="sf-jobs-section">

                                            <div class="sf-jobs-head">
                                                <a href="job-detail.html" class="sf-jobs-media"><img src="{{asset('frontend/assets/images/jobs/3.jpg')}}" alt=""></a>
                                                <span class="sf-jobs-position">Freelance</span>
                                            </div>

                                            <div class="sf-jobs-info">
                                                <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                                <h4 class="sf-title"><a href="job-detail.html">Electrician Required in Brooklyn</a></h4>
                                                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                            </div>

                                            <div class="sf-jobs-footer">
                                                <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                                <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="media-bg-animate">
                                        <div class="sf-jobs-section">

                                            <div class="sf-jobs-head">
                                                <a href="job-detail.html" class="sf-jobs-media"><img src="{{asset('frontend/assets/images/jobs/4.jpg')}}" alt=""></a>
                                                <span class="sf-jobs-position">Freelance</span>
                                            </div>

                                            <div class="sf-jobs-info">
                                                <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                                <h4 class="sf-title"><a href="job-detail.html">Librarian Required in Brooklyn</a></h4>

                                                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                            </div>

                                            <div class="sf-jobs-footer">
                                                <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                                <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 5 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="media-bg-animate">
                                        <div class="sf-jobs-section">

                                            <div class="sf-jobs-head">
                                                <a href="javascript:void(0);" class="sf-jobs-media"><img src="{{asset('frontend/assets/images/jobs/5.jpg')}}" alt=""></a>
                                                <span class="sf-jobs-position">Freelance</span>
                                            </div>

                                            <div class="sf-jobs-info">
                                                <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                                <h4 class="sf-title"><a href="javascript:void(0);">Nursing Assistant Required</a></h4>
                                                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                            </div>

                                            <div class="sf-jobs-footer">
                                                <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                                <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 6 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="media-bg-animate">
                                        <div class="sf-jobs-section">

                                            <div class="sf-jobs-head">
                                                <a href="javascript:void(0);" class="sf-jobs-media"><img src="{{asset('frontend/assets/images/jobs/6.jpg')}}" alt=""></a>
                                                <span class="sf-jobs-position">Freelance</span>
                                            </div>

                                            <div class="sf-jobs-info">
                                                <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                                <h4 class="sf-title"><a href="javascript:void(0);">President of Sales Required</a></h4>
                                                <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                            </div>

                                            <div class="sf-jobs-footer">
                                                <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                                <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Jobs Section END -->

            <!-- Pricing Plan Section -->
            <div class="aon-pricing-area sf-curve-pos">
                <div class="container">
                    <!--Title Section Start-->
                    <div class="section-head">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <span class="aon-sub-title">Pricing</span>
                                <h2 class="aon-title">Our Pricing Plans</h2>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!--Title Section End-->

                    <div class="section-content">
                        <!--Pricing Table Button-->
                        <div class="sf-priceing-tb-control">
                            <span>Bill Monthly</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <span>Bill Yearly</span>
                        </div>
                        <!--Pricing Table Button-->

                        <div class="sf-pricing-section-outer">
                            <div class="row no-gutter">
                                <!-- COLUMNS 1 -->
                                <div class="col-md-3">
                                    <div class="sf-pricing-section">

                                        <div class="sf-price-tb-info">
                                            <div class="sf-price-plan-name">Intro</div>
                                            <div class="sf-price-plan-discount">Save 20%</div>
                                        </div>

                                        <div class="sf-price-tb-list">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Booking</li>
                                                <li><i class="fa fa-check"></i> Own Cover Image</li>
                                                <li class="disable"><i class="fa fa-check"></i> Multiple Categories</li>
                                                <li class="disable"><i class="fa fa-check"></i> Apply for Job</li>
                                                <li class="disable"><i class="fa fa-check"></i> Job Alerts</li>
                                                <li class="disable"><i class="fa fa-check"></i> Google Calendar</li>
                                                <li class="disable"><i class="fa fa-check"></i> Crop Profile Image</li>
                                            </ul>
                                        </div>

                                        <div class="sf-price-tb-plan">
                                            <div class="sf-price-plan-cost">$<span>29</span>/month</div>
                                        </div>
                                        <a href="contact-us.html" class="sf-choose-plan-btn">Choose Plan</a>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="col-md-3">
                                    <div class="sf-pricing-section">

                                        <div class="sf-price-tb-info">
                                            <div class="sf-price-plan-name">Base</div>
                                            <div class="sf-price-plan-discount">Save 20%</div>
                                        </div>

                                        <div class="sf-price-tb-list">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Booking</li>
                                                <li><i class="fa fa-check"></i> Own Cover Image</li>
                                                <li><i class="fa fa-check"></i> Multiple Categories</li>
                                                <li><i class="fa fa-check"></i> Apply for Job</li>
                                                <li><i class="fa fa-check"></i> Job Alerts</li>
                                                <li class="disable"><i class="fa fa-check"></i> Google Calendar</li>
                                                <li class="disable"><i class="fa fa-check"></i> Crop Profile Image</li>
                                            </ul>
                                        </div>

                                        <div class="sf-price-tb-plan">
                                            <div class="sf-price-plan-cost">$<span>39</span>/month</div>
                                        </div>
                                        <a href="contact-us.html" class="sf-choose-plan-btn">Choose Plan</a>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="col-md-3">
                                    <div class="sf-pricing-section sf-pricing-active">

                                        <div class="sf-price-tb-info">
                                            <div class="sf-price-plan-name">Pro</div>
                                            <div class="sf-price-plan-discount">Save 20%</div>
                                        </div>

                                        <div class="sf-price-tb-list">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Booking</li>
                                                <li><i class="fa fa-check"></i> Own Cover Image</li>
                                                <li><i class="fa fa-check"></i> Multiple Categories</li>
                                                <li><i class="fa fa-check"></i> Apply for Job</li>
                                                <li><i class="fa fa-check"></i> Job Alerts</li>
                                                <li><i class="fa fa-check"></i> Google Calendar</li>
                                                <li><i class="fa fa-check"></i> Crop Profile Image</li>
                                            </ul>
                                        </div>

                                        <div class="sf-price-tb-plan">
                                            <div class="sf-price-plan-cost">$<span>49</span>/month</div>
                                        </div>
                                        <a href="contact-us.html" class="sf-choose-plan-btn">Try 1 Month</a>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="col-md-3">
                                    <div class="sf-pricing-section">

                                        <div class="sf-price-tb-info">
                                            <div class="sf-price-plan-name">Enterprise</div>
                                            <div class="sf-price-plan-discount">Save 20%</div>
                                        </div>

                                        <div class="sf-price-tb-list">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Booking</li>
                                                <li><i class="fa fa-check"></i> Own Cover Image</li>
                                                <li><i class="fa fa-check"></i> Multiple Categories</li>
                                                <li><i class="fa fa-check"></i> Apply for Job</li>
                                                <li><i class="fa fa-check"></i> Job Alerts</li>
                                                <li><i class="fa fa-check"></i> Google Calendar</li>
                                                <li><i class="fa fa-check"></i> Crop Profile Image</li>
                                            </ul>
                                        </div>

                                        <div class="sf-price-tb-plan">
                                            <div class="sf-price-plan-cost">$<span>89</span>/month</div>
                                        </div>
                                        <a href="contact-us.html" class="sf-choose-plan-btn">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Pricing Plan Section END -->

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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                                        <div class="sf-testimonial-media"><img src="{{asset('frontend/assets/images/testimonials/pic1.jpg')}}" alt=""></div>
                                        <div class="sf-testimonial-user-detail">
                                            <div class="sf-testi-user-name">Mark, Homestay </div>
                                            <div class="sf-testi-user-position">Sales Manager</div>
                                        </div>

                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-user">
                                        <div class="sf-testimonial-media"><img src="{{asset('frontend/assets/images/testimonials/pic1.jpg')}}" alt=""></div>
                                        <div class="sf-testimonial-user-detail">
                                            <div class="sf-testi-user-name">Mark, Homestay </div>
                                            <div class="sf-testi-user-position">Sales Manager</div>
                                        </div>

                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-user">
                                        <div class="sf-testimonial-media"><img src="{{asset('frontend/assets/images/testimonials/pic2.jpg')}}" alt=""></div>
                                        <div class="sf-testimonial-user-detail">
                                            <div class="sf-testi-user-name">Mark, Homestay </div>
                                            <div class="sf-testi-user-position">Sales Manager</div>
                                        </div>

                                    </div>
                                </div>
                                <!-- COLUMNS 1 -->
                                <div class="slick-item">
                                    <div class="sf-testimonial-user">
                                        <div class="sf-testimonial-media"><img src="{{asset('frontend/assets/images/testimonials/pic3.jpg')}}" alt=""></div>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
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
        <footer class="site-footer footer-light" >

            <!-- FOOTER NEWSLETTER START -->
            <div class="footer-top-newsletter">
                <div class="container">
                    <div class="sf-news-letter">
                        <span>Subscribe Our Newsletter</span>
                        <form>
                            <div class="form-group sf-news-l-form">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                <button type="submit" class="sf-sb-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Footer col 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-link">
                                <h4 class="sf-f-title">Site Links</h4>
                                <ul>
                                    <li><a href="blog-grid.html">Blog</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="job-grid.html">Jobs</a></li>
                                    <li><a href="all-categories.html">Categories</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 2-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-cities">
                                <h4 class="sf-f-title">Popular Cities</h4>
                                <ul>
                                    <li><a href="all-categories.html">Ballston Lake</a></li>
                                    <li><a href="all-categories.html">Batumi</a></li>
                                    <li><a href="all-categories.html">Brooklyn</a></li>
                                    <li><a href="all-categories.html">Cambridge</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-categories">
                                <h4 class="sf-f-title">Categories</h4>
                                <ul>
                                    <li><a href="categories-detail.html">Car Service</a></li>
                                    <li><a href="categories-detail.html">House Cleaning</a></li>
                                    <li><a href="categories-detail.html">Transport</a></li>
                                    <li><a href="categories-detail.html">Yoga Classes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-contact">
                                <h4 class="sf-f-title">Contact Info</h4>
                                <ul>
                                    <li>India</li>
                                    <li>+41 232 525 5257</li>
                                    <li>+41 856 525 5369</li>
                                    <li>hello@Servicefinder.com</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="sf-footer-bottom-section">
                        <div class="sf-f-logo"><a href="javascript:void(0);"><img src="{{asset('frontend/assets/images/logo-dark.png')}}" alt=""></a></div>
                    	<div class="sf-f-copyright">
                        	<span>Copyright 2024 | Aone Theme. All Rights Reserved</span>
                        </div>

                        <div class="sf-f-social">
                            <ul class="socila-box">
                                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </footer>
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
                                <form class="aon-login-form" action="{{route('login')}}" method="post">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="email" type="text" placeholder="User Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="password" type="password" placeholder="Password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group d-flex aon-login-option justify-content-between">
                                                <div class="aon-login-opleft">
                                                     <div class="checkbox sf-radio-checkbox">
                                                        <input id="td2_2" name="abc" value="five" type="checkbox">
                                                        <label for="td2_2">Keep me logged</label>
                                                    </div>
                                                </div>
                                                <div class="aon-login-opright">
                                                    <a href="#">Forget Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Sign up Form-->
                        <div id="Past" class="tab-pane">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" action="{{route('register')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="name" type="text" placeholder="Full Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="mobille" type="tel" pattern="\d{10}" maxlength="10" placeholder="Phone">
                                                    <i class="aon-input-icon fa fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="email" type="email" placeholder="Email">
                                                    <i class="aon-input-icon fa fa-envelope-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="password" type="password" placeholder="Password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group sign-term-con">
                                                <div class="checkbox sf-radio-checkbox">
                                                    <input id="td33" name="abc" value="five" type="checkbox">
                                                    <label for="td33">I've read and agree with your <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
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
<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel" aria-hidden="true" style="margin-top:71px; overflow:hidden; position: fixed; font-family: system-ui; background-color: rgb(155 150 150 / 50%); " data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
				<div class="modal-header" style="padding:1rem !important; border-bottom: 0 none; background-image: url(https://nationlearns-bucket.s3.ap-south-1.amazonaws.com/images/newconnect.jpeg);">
					<button type="button" class="close"   id="closeButton" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            <div class="modal-body">
				<div class="modal-body"  style="padding: 0.5rem;">
                <div class="heading" style=" display:none;border: 1px solid; border-radius: 5px; padding: 10px 0px 0px 0px;" id="header-menu">
					<h6 style="text-align: center; font-size: large; font-family: system-ui; margin-bottom: 10px;">
                    Your Just a few steps Away to connect with your budget friendly professional.</h6>
				</div>
                <div class="heading" style="border: 1px solid; display:none; border-radius: 5px; padding: 10px 0px 0px 0px;" id="header1">
					<h6 style="text-align: center; font-size: large; font-family: system-ui; margin-bottom: 10px;">
                    Great News, You're almost there!</h6>
				</div>
				<p class="error" style="color:red" id="error"> </p>    
				<h3 class="success" style="color:green" id="success"></h3>
				<h4 id="question-text" style="font-weight: 700; margin-bottom: 0.5rem;"></h4>
                <form id="options-form">
                </form>
				<form id="textForm" style="display: none;">
					<div class="form-group">
						<label for="exampleFormControlTextarea1" class="form-check-label" style="font-weight: 700;">Additional Info</label>
						<textarea class="form-control" style="height:65px !important" id="otherDetails" rows="3" ></textarea>
					</div>
				</form>
				
				<form id="detail-form" style="display: none;">
					<div class="form-group">
						<label style="font-weight: 700;">Your Name</label>
						<input type="text" class="form-control"  value ="" id="userName" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
					</div>
					<div class="form-group">
						<label style="font-weight: 700;">Email ID</label>
						<input type="email" class="form-control" value ="" id="userEmail" placeholder="Enter Your Email" required>
					</div>
					<div class="form-check-gender">
						<label style="font-weight: 700;">Select Your Gender</label>
						<select id="userGender"  value ="" class="form-control">
							<option value="">Select Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</div>
				</form>
				<form id="verifyMobile" style="display: none;">
					<div class="form-group">
						<label class="form-check-label" style="font-weight: 700;">Mobile Number</label>
						<input type="text" class="form-control" id="mobileNumber" placeholder="+91-9999999999">
					</div>
				</form>
				<div id="submitOtp" style="display: none;">
					<div class="container otp height-100 d-flex justify-content-center align-items-center"> 
						<div class="position-relative"> 
							<div class="card p-2 text-center" id="validateOtp"> 
								<h4 class="success" style="color:green" id="success1"></h4>
								<h6>Please enter the one time password <br> to verify your account</h6> 
									<div><span>A code has been sent to</span> 
										<small id="mobileNumber"></small> 
									</div> 
									<div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
										<input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="first" name="firstBx"  maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(1)' required>
                                    <input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="second" name="secondBx" maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(2)' required>
                                    <input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="third" name="thirdBx"  maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(3)' required>
                                    <input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="fourth" name="fourBx"   maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(4)' required>
                                    <input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="fifth" name="fifthBx"  maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(5)' required>
                                    <input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="sixth" name="sixBx"    maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(6)' required>
									</div> 

									<button class="btn" id="edit_mobile">Edit Mobile</button>
									<div class="mt-4" style="display:inline"> 
										<button type="button" class="btn btn-success" id="ResendOtp">Resend OTP</button>
										<button class="btn btn-danger px-4 validate" id="validate">Validate</button> 
									</div> 
								</div>
								<div class="card p-2 text-center" style="display: none;" id="validateSuccess">
									<p style="color: green;">OTP Validate Success</p>
								</div>
								<div class="card p-2 text-center" style="display: none;" id="thanks2">
									<p style="color: red;">Happy to see you back, Hope your enjoying your experience we look forward to serving you better, Go ahead post your requirement.</p>
								</div>
								<div class="card p-2 text-center" style="display: none;" id="thanks">
									<h2>Your request is submitted successfully.</h2>
									<h6>our service partners will reach out to you soon kindly provide them your compelte requirement they will give you the best service in good budget</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="modal-footer" style="padding: 0.25rem 1rem !important; border-top: 0 none;">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_button">Close</button> -->
                <button type="button" class="btn btn-primary" id="next-button">Next</button>
				<button type="button" class="btn btn-primary" style="display: none;" id="submit-button">Next</button>
				<div style="display:none" id="Verify-mobile">
					<button type="button" class="btn btn-primary" id="Verify-Otp">Verify</button>
				</div>
				<button type="button" class="btn btn-primary" style="display: none;" id="submitData1">Submit</button>
				<button type="button" class="btn btn-primary" style="display: none;" id="submit-button2">Next</button>
				<button type="button" class="btn btn-primary" style="display: none;" id="submitData">Submit</button>
				<button type="button" class="btn btn-primary" style="display: none;" id="submit-button1">Next</button>
                 </div>
		    </div>
        </div>
    </div>
</div>
<!-- close Popup Modal -->
<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{asset('frontend/assets/js/script.js')}}"></script>
<script  src="{{asset('frontend/assets/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script><!-- BOOTSTRAP SELECT -->
<script  src="{{asset('frontend/assets/js/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script  src="{{asset('frontend/assets/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{asset('frontend/assets/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('frontend/assets/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script  src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script  src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script  src="{{asset('frontend/assets/js/slick.min.js')}}"></script><!-- OWL  SLIDER  -->

<script  src="{{asset('frontend/assets/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script src="{{asset('frontend/assets/js/m-custom-scrollbar.min.js')}}"></script><!-- my account left panel scroller -->
<script src="{{asset('frontend/assets/js/dropzone.js')}}"></script><!-- Images upload -->

<script src="{{asset('frontend/assets/js/bootstrap4-toggle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script  src="{{asset('frontend/assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('frontend/assets/js/lc_lightbox.lite.js')}}" ></script><!-- IMAGE POPUP -->
<script  src="{{asset('frontend/assets/js/bootstrap-slider.min.js')}}"></script><!-- Form js -->


</body>
</html>
