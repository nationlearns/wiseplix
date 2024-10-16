<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/all-categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:53:49 GMT -->

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

    <style>

        .whole-category-card{
           transition: transform 0.2s ease-in-out;
        }
        .whole-category-card:hover{
            transform: translateY(-3px)
        }

        .dropdown .show{
            height: 400px;
            overflow: hidden;
            overflow-y: scroll;
        }

        .dropdown-item:focus, .dropdown-item:hover {
            /* color: #fff;
            text-decoration: none;
            background-color: #022278; */
        }
    </style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-21XRZX7MFP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-21XRZX7MFP');
</script>
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
    <div class="page-wraper"> <!-- HEADER START -->
        @include('header')
        <!-- HEADER END -->

        <!-- Content -->
        <div class="page-content">

            <!-- Banner Area -->
            <div class="aon-page-benner-area">
                <div class="aon-page-banner-row" style="background-image: url({{ asset('frontend/assets/images/banner/job-banner.jpg')}})">
                    <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
                    <div class="sf-banner-heading-wrap">
                        <div class="sf-banner-heading-area">
                            <div class="sf-banner-heading-large">All Category</div>
                            <div class="sf-banner-breadcrumbs-nav">
                                <ul class="list-inline">
                                    <li><a href="{{ url('/') }}"> Home </a></li>
                                    <li>All Category</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area End -->
            <div class="aon-page-jobs-wrap">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="mb-5 ">
                                <div class="dropdown">
                                    <a class="btn btn-info dropdown-toggle btn-lg" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Filter Category
                                    </a>

                                    <div class="dropdown-menu">
                                        @foreach ($categories as $category)                                        
                                            <li><a class="dropdown-item" href="{{route('category.view', $category->slug)}}">{{ $category->alt_name }}</a></li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Left part start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <!-- COLUMNS 1 -->
                                @foreach($data as $item)
                                <div class="col-lg-3 col-md-12">
                                    <div class="aon-blog-style-1 whole-category-card">
                                        <a href="{{route('category.view', $item->slug)}}" class="">
                                            <div class="post-bx">
                                                <!-- Content section for blogs start -->




                                                <div class="post-thum">
                                                    <img 
                                                        title="{{ $item->alt_name }}" 
                                                        alt="{{ $item->alt_name }}" 
                                                        src="{{asset('images/category-icons/'.$item->cat_image)}}"
                                                        >
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-text">
                                                        <h4 class="post-title">
                                                            {{ $item->alt_name }}
                                                        </h4>
                                                    </div>

                                                </div>
                                                <!-- Content section for blogs end -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="site-pagination s-p-center">
                                    {{-- <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fa fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fa fa-ellipsis-h"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="#">11</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i
                                                    class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul> --}}
                                    <div class="my-5">
                                        {!! $data->links() !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Left part END -->

                    </div>
                </div>
            </div>
            <!-- All categories Block Section  END -->
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

</html>
