<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/all-categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:53:49 GMT -->

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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>All Categories</title>

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
        <header class="site-header header-style-2 mobile-sider-drawer-menu header-full-width">
            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">

                    <div class="container clearfix">
                        <!--Logo section start-->
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{url('/')}}">
                                    <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" alt="">
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
                                <li class="has-child current-menu-item"><a href="{{url('/')}}">Home</a>
                                </li>

                                <li class="has-child">
                                    <a href="">Category</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('category')}}">All Category</a></li>
                                    </ul>
                                </li>

                                <li class="has-child"><a href="">Blogs</a>
                                </li>

                                <li class="has-child"><a href="{{url('about-us')}}">About Us</a>
                                </li>
                                <li><a href="{{url('contact-us')}}">Contact</a></li>
                            </ul>

                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <!--Login-->
                                <button type="button" class="site-button aon-btn-login" data-toggle="modal"
                                    data-target="#login-signup-model">
                                    <i class="fa fa-user"></i> Login
                                </button>
                                <!--Sign up-->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- Content -->
        <div class="page-content">

            <!-- Banner Area -->
            <div class="aon-page-benner-area2">

                <div class="aon-banner-large2-title">
                    Still not finding what you're looking for? View all Provider categories
                </div>

            </div>
            <!-- Banner Area End -->

            <!-- All categories Block Section -->
            <div class="aon-all-categories-wrap2">
                <div class="container">
                    <div class="aon-all-categories-block2">
                        <div class="row">
                            <!--block-1-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-1.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>05</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="">Kitchen Cleaning</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-2-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-2.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>15</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Electician</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-3-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-3.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>25</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Hair salon</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-4-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-4.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>29</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Plumber</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-5-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-5.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>16</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Gym</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-6-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-6.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>35</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Yoga</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-7-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-7.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>10</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Gardening</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-8-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-8.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>05</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Room Cleaning</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!--block-9-->
                            <div class="col-lg-4 col-md-6">
                                <div class="aon-all-cat-block"
                                    style="background-image: url({{asset('frontend/assets/images/all-categories/pic-9.jpg')}});">
                                    <div class="aon-cat-quantity">
                                        <span><i>+</i>27</span>
                                    </div>
                                    <div class="aon-cat-name">
                                        <h3><a href="categories-detail.html">Cafe</a></h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- All categories Block Section  END -->

        </div>
        <!-- Content END-->

        <!-- FOOTER START -->
        <footer class="site-footer footer-light">

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
                        <div class="sf-f-logo"><a href="javascript:void(0);"><img
                                    src="{{ asset('frontend/assets/images/logo-dark.png') }}" alt=""></a>
                        </div>
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
                                    <form class="aon-login-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="aon-inputicon-box">
                                                        <input class="form-control sf-form-control"
                                                            name="company_name" type="text"
                                                            placeholder="User Name">
                                                        <i class="aon-input-icon fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="aon-inputicon-box">
                                                        <input class="form-control sf-form-control"
                                                            name="company_name" type="password"
                                                            placeholder="Password">
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
                                    <form class="aon-login-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="aon-inputicon-box">
                                                        <input class="form-control sf-form-control" name="First_Name"
                                                            type="text" placeholder="First Name">
                                                        <i class="aon-input-icon fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="aon-inputicon-box">
                                                        <input class="form-control sf-form-control"
                                                            name="company_name" type="password"
                                                            placeholder="Last Name">
                                                        <i class="aon-input-icon fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="aon-inputicon-box">
                                                        <input class="form-control sf-form-control" name="Phone"
                                                            type="password" placeholder="Phone">
                                                        <i class="aon-input-icon fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="aon-inputicon-box">
                                                        <input class="form-control sf-form-control" name="email"
                                                            type="password" placeholder="Email">
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
                                                        <input class="form-control sf-form-control" name="password"
                                                            type="password" placeholder="Confirm Password">
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




    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELECT -->
    <script src="{{ asset('frontend/assets/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('frontend/assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('frontend/assets/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script><!-- OWL  SLIDER  -->

    <script src="{{ asset('frontend/assets/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->

    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('frontend/assets/js/lc_lightbox.lite.js') }}"></script><!-- IMAGE POPUP -->
    <script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script><!-- Form js -->

</body>

</html>
