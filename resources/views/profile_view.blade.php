<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/job-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:54:07 GMT -->

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logowise.jpeg') }}" />

    <!-- PAGE TITLE HERE -->
    <title> Associate Detail</title>

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
        <div class="page-content bg-white">

            <div class="sf-job-benner sf-overlay-wrapper">
                <div class="banner-job-row">
                    <div class="sf-overlay-main" style="opacity:0;"></div>
                    <div class="sf-banner-job-heading-wrap">
                        <div class="sf-banner-job-heading-area">
                            <div class="sf-banner-job-logo-pic"><img
                                    src="{{ asset('frontend/assets/images/job4.jpg') }}" alt=""></div>
                            <div class="sf-banner-job-heading-large">{{ $id->company_name }}</div>
                            <ul class="sf-banner-job-dutation">
                                <li><i class="fa fa-envelope"></i> G-mail: <span class="jobs-timing">{{$id->email}}</span></li>
                                <li><i class="fa fa-phone"></i> Phone Number : <span class="jobs-date-label">{{$id->phone}}</span></li>
                                <li><i class="fa fa-list-alt"></i> Category Name : <span class="jobs-date-label">{{$cat_name}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content ">
                <!-- Left & right section start -->
                <div class="container">


                    <div class="row mt-4">

                        <!-- Left part start -->
                        <div class="col-lg-8 col-md-12">

                            <h3>About The Company</h3>

                            <p>{{ $id->about_company }}</p><br>

                           


                            <div class="aon-job-gallery">
                                <h3 class="m-b30">Catalogue Photos</h3>
                                <ul class="job-gallery clearfix mfp-gallery">
                                    <li>
                                        <div class="job-gallery-pic"
                                            style="background-image:url({{ asset('frontend/assets/images/job-gallery/pic.jpg')}})">
                                            <a href="images/job-gallery/pic.jpg"
                                                class="mfp-link job-gallery-link"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="job-gallery-pic"
                                            style="background-image:url({{ asset('frontend/assets/images/job-gallery/pic2.jpg')}})">
                                            <a href="images/job-gallery/pic2.jpg"
                                                class="mfp-link job-gallery-link"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="job-gallery-pic"
                                            style="background-image:url({{ asset('frontend/assets/images/job-gallery/pic3.jpg')}})">
                                            <a href="images/job-gallery/pic3.jpg"
                                                class="mfp-link job-gallery-link"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="job-gallery-pic"
                                            style="background-image:url({{ asset('frontend/assets/images/job-gallery/pic4.jpg')}})">
                                            <a href="#" class="job-gallery-link">24+</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Left part END -->

                        <!-- Side bar start -->
                        <div class="col-lg-4 col-md-12">

                            <aside class="sf-jobdetail-sidebar">
                                <div class="sf-jobdetail-blocks">
                                    <div class="sf-related-jobs">
                                        <div class="sf-related-job-pic">
                                            <h4 class="sf-title">Location</h4>
                                        </div>
                                        <div class="sf-related-job-location">
                                            <i class="feather-map-pin"></i> {{ $id->address }}
                                        </div>
                                        <div class="sf-related-job-location">
                                            <i class="fa fa-envelope"></i> G-mail : {{ $id->email }}
                                        </div>
                                        <div class="sf-related-job-location">
                                            <i class="fa fa-phone"></i> Phone Number : <span class="jobs-date-label">{{$id->phone}}</span>
                                        </div>

                                    </div>
                                </div>


                        </div>

                        </aside>

                    </div>
                    <!-- Side bar END -->

                </div>
            </div>
        </div>

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

</html>
