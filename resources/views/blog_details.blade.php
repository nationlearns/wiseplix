<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:54:10 GMT -->

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

    <!-- PAGE TITLE HERE -->
    <title>Blogs</title>

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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-21XRZX7MFP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-21XRZX7MFP');
    </script>
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
            {{-- <div class="aon-page-benner-area">
                <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg')}})">
                    <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
                    <div class="sf-banner-heading-wrap">
                        <div class="sf-banner-heading-area">
                            <div class="sf-banner-heading-large">Blog</div>
                            <div class="sf-banner-breadcrumbs-nav">
                                <ul class="list-inline">
                                    <li><a href="{{ url('/') }}"> Home </a></li>
                                    <li>Blogs Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Banner Area End -->

            <!-- Left & right section -->
            <div class="aon-page-jobs-wrap">
                <div class="container">
                    <div class="row">



                        <!-- Left part start -->
                        <div class="col-lg-8 col-md-12">

                            <div class="sf-post-detail">

                                <div class="post blog-post blog-detail sf-blog-style-1">
                                    <div class="post-bx">
                                        <!-- Content section for blogs start -->
                                        <div class="post-thum">
                                            <img title="title" alt="" src="{{ asset($blog->blogs_image) }}">
                                        </div>
                                        <div class="post-info">
                                            <div class="post-meta sf-icon-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="feather-user"></i>By
                                                        <a href="#" title=""
                                                            rel="">{{ $blog->created_by }}</a>
                                                    </li>
                                                    <li class="post-views">
                                                        <a href="#" title="" rel=""><i
                                                                class="feather-eye"></i>{{ $blog->created_at->format('F d, Y') }}</a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="post-text">
                                                <h4 class="post-title">
                                                    {{ $blog->title }}
                                                </h4>
                                                <p>
                                                    {!!$blog->description!!}
                                                </p>
                                            </div>

                                        </div>
                                        <!-- Content section for blogs end -->
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Left part END -->

                        <!-- Side bar start -->
                        <div class="col-lg-4 col-md-12">

                            <aside class="side-bar ">

                                <!-- CATEGORY -->
                                <div class="widget widget_services rounded-sidebar-widget">
                                    <div class="text-left m-b30">
                                        <h3 class="widget-title">Categories</h3>
                                    </div>
                                    <ul>
                                        <li><a href="javascript:void(0);">Branding</a><span class="badge">(28)</span>
                                        </li>
                                        <li><a href="javascript:void(0);">Corporat</a><span class="badge">(05)</span>
                                        </li>
                                        <li><a href="javascript:void(0);">Design</a><span class="badge">(24)</span>
                                        </li>
                                        <li><a href="javascript:void(0);">Gallery</a><span class="badge">(15)</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- RECENT POSTS -->
                                <div class="widget recent-posts-entry rounded-sidebar-widget">
                                    <div class="text-left m-b30">
                                        <h3 class="widget-title">Recent Posts</h3>
                                    </div>

                                    <div class="widget-post-bx">
                                        @foreach ($data as $item)
                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <img src="{{asset($item->blogs_image)}}" alt="">
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h5 class="post-title"> <a href="{{route('blos.details',$item->slug)}}">{{ substr($item->title, 0, 35) }}....</a></h5>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-date">{{ $item->created_at->format('F d, Y') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </aside>

                        </div>
                        <!-- Side bar END -->

                    </div>
                </div>
            </div>
            <!-- Left & right section  END -->

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


<!-- Mirrored from aonetheme.com/sf-html-demo/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:54:13 GMT -->

</html>
