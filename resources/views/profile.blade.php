<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/profile-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:54:06 GMT -->
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

    <!-- PAGE TITLE HERE -->
    <title>Profile Sidebar</title>

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
	<div class="page-wraper">        <!-- HEADER START -->
        <header class="site-header header-style-2 mobile-sider-drawer-menu header-full-width">
          <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">

            <div class="container clearfix">
                <!--Logo section start-->
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                      <a href="index.html">
                      <img src="{{asset('frontend/assets/images/logo-dark.png')}}" alt="">
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
                      <li class="has-child current-menu-item"><a href="javascript:;">Home</a>
                          <ul class="sub-menu">
                              <li><a href="index.html">Home 1</a></li>
                              <li><a href="index-2.html">Home 2</a></li>
                          </ul>
                      </li>

                      <li class="has-child">
                          <a href="javascript:;">Pages</a>
                          <ul class="sub-menu">
                              <li><a href="about-us.html">About us</a></li>
                              <li><a href="javascript:;">Categories</a>
                                  <ul class="sub-menu">
                                      <li><a href="all-categories.html">All Categories</a></li>
                                      <li><a href="categories-detail.html">Categories Detail</a></li>
                                      <li><a href="categories-detail-2.html">Categories Detail 2</a></li>
                                  </ul>
                              </li>

                              <li><a href="javascript:;">Search</a>
                                  <ul class="sub-menu">
                                      <li><a href="search-list.html">Search List</a></li>
                                      <li><a href="new-search-list-2.html">Search List 2</a></li>
                                      <li><a href="search-list-map.html">Search List Map</a></li>
                                      <li><a href="search-list-map2.html">Search List Map 2</a></li>
                                      <li><a href="search-grid.html">Search-grid</a></li>
                                      <li><a href="search-grids-map.html">Search-grid-map</a></li>
                                      <li><a href="search-grid-map2.html">Search-grid-map2</a></li>
                                  </ul>
                              </li>
                              <li><a href="error-404.html">Error 404</a></li>
                          </ul>
                      </li>

                      <li class="has-child"><a href="javascript:;">Profile</a>
                          <ul class="sub-menu">
                              <li><a href="profile-full.html">Profile</a></li>
                              <li><a href="profile-sidebar.html">Profile Sidebar</a></li>
                          </ul>
                      </li>

                      <li class="has-child"><a href="javascript:;">Jobs</a>
                          <ul class="sub-menu">
                              <li><a href="job-listing.html">Job listing</a></li>
                              <li><a href="job-grid.html">Job grid</a></li>
                              <li><a href="job-detail.html">Job detail</a></li>
                          </ul>
                      </li>

                      <li class="has-child"><a href="javascript:;">Blog</a>
                          <ul class="sub-menu">
                              <li><a href="blog-grid.html">Blog Grid</a></li>
                              <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                              <li><a href="blog-list.html">Blog list</a></li>
                              <li><a href="blog-list-2.html">Blog list 2</a></li>
                              <li><a href="blog-list-3.html">Blog list 3</a></li>
                              <li><a href="blog-list-4.html">Blog list 4</a></li>
                              <li><a href="blog-detail.html">Blog detail</a></li>
                          </ul>
                      </li>
                      <li><a href="contact-us.html">Contact</a></li>
                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <!--Login-->
                                <button type="button" class="site-button aon-btn-login" data-toggle="modal" data-target="#login-signup-model">
                                    <i class="fa fa-user"></i> Login
                                </button>
                                <!--Sign up-->
                                <a href="mc-profile.html" class="site-button aon-btn-signup m-l20">
                                    <i class="fa fa-plus"></i> Add Listing
                                </a>
                            </div>

                            </div>
            </div>

            </div>
          </div>
        </header>
        <!-- HEADER END -->

        <!-- Content -->
        <div class="page-content">

            <!-- Banner start -->
            <div class="sf-profile-banner">
                <div class="container sf-proBnr-container">
                    <div class="sf-proBnr-row row">
                        <div class="col-md-6 sf-proBnr-left text-center">
                            <div class="sf-provi-pic"><img src="{{asset('frontend/assets/images/pro-pic.jpg')}}" alt=""/></div>
                            <h3 class="sf-provi-name">Chris Luisa</h3>
                            <div class="sf-provi-tagline">We Provide best Cleaning services</div>
                            <div class="sf-provi-gallery">
                                <a class="elem pic-long" href="{{asset('frontend/assets/images/profile/pic1.jpg')}}">12 Photos</a>
                                <a class="elem pic-long" href="{{asset('frontend/assets/images/profile/pic2.jpg')}}"></a>
                                <a class="elem pic-long" href="{{asset('frontend/assets/images/profile/pic3.jpg')}}"></a>
                                <a class="elem pic-long" href="{{asset('frontend/assets/images/profile/pic4.jpg')}}"></a>
                                <a class="elem pic-long" href="{{asset('frontend/assets/images/profile/pic5.jpg')}}"></a>
                                <a class="elem pic-long" href="{{asset('frontend/assets/images/profile/pic6.jpg')}}"></a>
                            </div>
                            <div class="sf-provi-rating">
                                <div class="sf-ow-pro-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star text-gray"></span>
                                </div>
                            </div>
                            <div class="sf-provi-social">
                                <ul class="share-social-bx">
                                  <li class="fb"><a href="javascript:;"> <i class="fa fa-facebook"></i> Share </a></li>
                                  <li class="tw"><a href="javascript:;"> <i class="fa fa-twitter"></i> Share </a></li>
                                  <li class="lin"><a href="javascript:;"> <i class="fa fa-linkedin"></i> Share </a></li>
                                  <li class="pin"><a href="javascript:;"> <i class="fa fa-pinterest"></i> Share </a></li>
                                  <li class="gp"><a href="javascript:;"> <i class="fa fa-google-plus"></i> Share </a></li>
                                  <li class="dig"><a href="javascript:;"> <i class="fa fa-digg"></i> Share </a></li>
                                </ul>
                            </div>
                            <div class="sf-provi-btn">
                                <a href="javascript:void(0);" class="site-button" data-redirect="yes" data-action="login" data-toggle="modal" data-target="#login-Modal">
						            <i class="fa fa-user"></i>Invite for Job
                                </a>
                                <a href="javascript:void(0);" class="site-button" data-redirect="yes" data-action="login" data-toggle="modal" data-target="#login-Modal">
						            <i class="fa fa-user"></i>Add To Fav
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 sf-proBnr-right">
                            <div class="sf-proBnr-pic"></div>
                        </div>
                  </div>
                </div>
            </div>
            <!-- Banner End -->

            <!--Nav Section Start-->
            <div class="sf-page-scroll-wrap sf-page-scroll-wrap2">
              <div class="container">
                <div class="sf-page-scroll-nav clearfix">
                  <ul class="clearfix">
                    <li><a href="#aon-provider-info">About</a></li>
                    <li><a href="#aon-provider-services">Services</a></li>
                    <li><a href="#aon-provider-coInfo">Contact Info</a></li>
                    <li><a href="#aon-provider-video">Video</a></li>
                    <li><a href="#aon-provider-articles">Articles</a></li>
                    <li><a href="#aon-provider-review">Review</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Nav Section End-->

            <!-- Left & right section start -->
            <div class="container">

                    <div class="row">

                        <!--Left Section-->
                        <div class="col-lg-4 col-md-12">

                            <aside  class="sf-sidebar-left">

                                <h3 class="sf-sidebar-title">Request a Quote</h3>

                                <div class="p-a30  m-b30  bg-white sf-shadow-box sf-border-box sf-radius-10">
                                    <div class="form-quot-bx">
                                        <form action="https://aonetheme.com/sf-html-demo/profile-sidebar.html?" method="post">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input name="name" type="text" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" type="text" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input name="phone" type="text" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea name="message" rows="8" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="site-button btn-block">Send information</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                 <h3 class="sf-sidebar-title">Related Providers</h3>

                                <div class="owl-carousel aon-related-provi-sidebar sf-owl-arrow">

                                    <!-- COLUMNS 1 -->
                                    <div class="item">
                                        <div class="aon-ow-provider-wrap">
                                            <div class="aon-ow-provider">

                                                <div class="aon-ow-top">
                                                    <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                    <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="aon-ow-info">
                                                        <h4 class="aon-title"><a href="profile-full.html">Mila Kunis</a></h4>
                                                        <span>Queens, United States</span>
                                                    </div>
                                                </div>
                                                <div class="aon-ow-mid">
                                                    <div class="aon-ow-media">
                                                        <a href="profile-full.html"><img src="{{asset('frontend/assets/images/providers/1.jpg')}}" alt=""></a>
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
                                            <div class="aon-ow-provider">

                                                <div class="aon-ow-top">
                                                    <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                    <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="aon-ow-info">
                                                        <h4 class="aon-title"><a href="profile-full.html">Javier Bardem</a></h4>
                                                        <span>Queens, United States</span>
                                                    </div>
                                                </div>
                                                <div class="aon-ow-mid">
                                                    <div class="aon-ow-media">
                                                        <a href="profile-full.html"><img src="{{asset('frontend/assets/images/providers/2.jpg')}}" alt=""></a>
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
                                            <div class="aon-ow-provider">

                                                <div class="aon-ow-top">
                                                    <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                    <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="aon-ow-info">
                                                        <h4 class="aon-title"><a href="profile-full.html">Edward Luise</a></h4>
                                                        <span>Queens, United States</span>
                                                    </div>
                                                </div>
                                                <div class="aon-ow-mid">
                                                    <div class="aon-ow-media">
                                                        <a href="profile-full.html"><img src="{{asset('frontend/assets/images/providers/3.jpg')}}" alt=""></a>
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
                                        <div class="aon-ow-provider-wrap">
                                            <div class="aon-ow-provider">

                                                <div class="aon-ow-top">
                                                    <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                    <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="aon-ow-info">
                                                        <h4 class="aon-title"><a href="profile-full.html">James McAvoy</a></h4>
                                                        <span>Queens, United States</span>
                                                    </div>
                                                </div>
                                                <div class="aon-ow-mid">
                                                    <div class="aon-ow-media">
                                                        <a href="profile-full.html"><img src="{{asset('frontend/assets/images/providers/4.jpg')}}" alt=""></a>
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
                                    <!-- COLUMNS 5 -->
                                    <div class="item">
                                        <div class="aon-ow-provider-wrap">
                                            <div class="aon-ow-provider">

                                                <div class="aon-ow-top">
                                                    <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                    <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="aon-ow-info">
                                                        <h4 class="aon-title"><a href="profile-full.html">Jackie Chan</a></h4>
                                                        <span>Queens, United States</span>
                                                    </div>
                                                </div>
                                                <div class="aon-ow-mid">
                                                    <div class="aon-ow-media">
                                                        <a href="profile-full.html"><img src="{{asset('frontend/assets/images/providers/5.jpg')}}" alt=""></a>
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
                                    <!-- COLUMNS 6 -->
                                    <div class="item">
                                        <div class="aon-ow-provider-wrap">
                                            <div class="aon-ow-provider">

                                                <div class="aon-ow-top">
                                                    <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                    <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="aon-ow-info">
                                                        <h4 class="aon-title"><a href="profile-full.html">Colin Farrell</a></h4>
                                                        <span>Queens, United States</span>
                                                    </div>
                                                </div>
                                                <div class="aon-ow-mid">
                                                    <div class="aon-ow-media">
                                                        <a href="profile-full.html"><img src="{{asset('frontend/assets/images/providers/6.jpg')}}" alt=""></a>
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

                            </aside>

                        </div>
                        <!--Left Section End-->

                         <!-- right part start -->
                        <div class="col-lg-8 col-md-12">
                            <!-- Services Detail-->
                            <div class="sf-provi-bio-box m-b50">
                                <h3 class="sf-provi-title">Home Made Clianing Service</h3>
                                <div class="sf-divider-line"></div>
                                <div class="sf-provi-cat"><strong>Categories:</strong> Packers and Movers</div>
                                <div class="sf-provi-bio-text">

                                    <p>We have a wide spectrum of expertise in web solutions within these industries, giving us the necessary skills and knowledge to help you increase your presence on the web.Through our expertise, technological knowledge, global presence and betspoke web solutions, we can help knowledge to help you increase your presence you transform your business, maximize performance and surpass the competition.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus tortor nec tellus sollicitudin lacinia id per conubia nostra, per inceptos himenaeos.</p>

                                </div>


                                <div class="social-share-icon social-share-icon2">
                                  <div class="social-share-cell">
                                      <strong>Explore Us On Social Media</strong>
                                  </div>
                                  <div class="social-share-cell">
                                    <ul class="share-buttons">
                                      <li><a class="fb-share" href="https://www.facebook.com/" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
                                      <li><a class="twitter-share" href="https://twitter.com/" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
                                      <li><a class="linkedin-share" href="https://linkedin.com/" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a></li>
                                      <li><a class="pinterest-share" href="https://in.pinterest.com/" target="_blank" rel="nofollow"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                  </div>
                                </div>

                            </div>
                            <!-- Services -->
                            <div class="sf-provi-service-box  m-b50" id="aon-provider-services">
                                <h3 class="sf-provi-title">Service</h3>
                                <div class="sf-divider-line"></div>
                                <ul class="sf-provi-service-list">
                                    <li class="sf-provi-service-box">

                                        <div class="sf-provi-service-top">
                                            <div class="sf-provi-service-left">
                                                <h4 class="sf-provi-service-ttle"><span class="sf-provi-toggle-btn">+</span> 3 bedroom or a house <span>Offer</span></h4>
                                                <div class="sf-provi-service-price">$124.00</div>
                                                <div class="sf-provi-service-hour"><i class="fa fa-clock-o"></i>Hour</div>
                                            </div>
                                            <div class="sf-provi-service-right">
                                                <button class="site-button btn-schedules">Schedule</button>
                                            </div>

                                        </div>
                                        <div class="sf-provi-service-bottom">
                                            <div class="sf-provi-descriptio">Many serives have a wide spectrum of expertise in web solutions within these industries, giving us the necessary skills and knowledge.</div>

                                        </div>
                                    </li>
                                    <li class="sf-provi-service-box">

                                        <div class="sf-provi-service-top">
                                            <div class="sf-provi-service-left">
                                                <h4 class="sf-provi-service-ttle"><span class="sf-provi-toggle-btn">+</span> 3 bedroom or a house <span>Offer</span></h4>
                                                <div class="sf-provi-service-price">$124.00</div>
                                                <div class="sf-provi-service-hour"><i class="fa fa-clock-o"></i>Hour</div>
                                            </div>
                                            <div class="sf-provi-service-right">
                                                <button class="site-button btn-schedules">Schedule</button>
                                            </div>

                                        </div>
                                        <div class="sf-provi-service-bottom">
                                            <div class="sf-provi-descriptio">Many serives have a wide spectrum of expertise in web solutions within these industries, giving us the necessary skills and knowledge.</div>

                                        </div>
                                    </li>
                                    <li class="sf-provi-service-box">

                                        <div class="sf-provi-service-top">
                                            <div class="sf-provi-service-left">
                                                <h4 class="sf-provi-service-ttle"><span class="sf-provi-toggle-btn">+</span> 3 bedroom or a house <span>Offer</span></h4>
                                                <div class="sf-provi-service-price">$ 12.00/Hour</div>
                                            </div>
                                            <div class="sf-provi-service-right">
                                                <div class="sf-provi-service-count">
                                                    <input id="demo1" type="text" value="55" name="demo1">
                                                </div>
                                                <button class="site-button btn-schedules">Schedule</button>
                                            </div>

                                        </div>
                                        <div class="sf-provi-service-bottom">
                                            <div class="sf-provi-descriptio">Many serives have a wide spectrum of expertise in web solutions within these industries, giving us the necessary skills and knowledge.</div>

                                        </div>
                                    </li>
                                    <li class="sf-provi-service-box">

                                        <div class="sf-provi-service-top">
                                            <div class="sf-provi-service-left">
                                                <h4 class="sf-provi-service-ttle"><span class="sf-provi-toggle-btn">+</span> 3 bedroom or a house <span>Offer</span></h4>
                                                <div class="sf-provi-service-price">$ 10.00/Hour</div>
                                            </div>
                                            <div class="sf-provi-service-right">
                                                <div class="sf-provi-service-count">
                                                    <input id="demo2" type="text" value="55" name="demo1">
                                                </div>
                                                <button class="site-button btn-schedules">Schedule</button>
                                            </div>

                                        </div>
                                        <div class="sf-provi-service-bottom">
                                            <div class="sf-provi-descriptio">Many serives have a wide spectrum of expertise in web solutions within these industries, giving us the necessary skills and knowledge.</div>

                                        </div>
                                    </li>
                                </ul>

                            </div>

                            <!-- Cotact Information-->
                            <div class="sf-provi-coInfo-box m-b50" id="aon-provider-coInfo">
                                <h3 class="sf-provi-title">Cotact Information</h3>
                                <div class="sf-divider-line"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sf-provi-coInfo-map">
                                            <div class="gmap-area">
                                                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sf-provi-coInfo-hour sf-list-business-hours">
                                            <ul class="list-unstyled sf-bh-wrapper">
                                            <li>
                                                <span>Monday<b>:</b></span><span>08:00 am to 06:00 pm</span>
                                                <ul class="sf-bh-breaktime"></ul>
                                            </li>
                                            <li>
                                                <span>Tuesday<b>:</b></span><span>08:00 am to 06:00 pm</span>
                                                <ul class="sf-bh-breaktime"></ul>
                                            </li>
                                            <li>
                                                <span>Wednesday<b>:</b></span><span>08:00 am to 06:00 pm</span>
                                                <ul class="sf-bh-breaktime"></ul>
                                            </li>
                                            <li>
                                                <span>Thursday<b>:</b></span><span>08:00 am to 06:00 pm</span>
                                                <ul class="sf-bh-breaktime"></ul>
                                            </li>
                                            <li>
                                                <span>Friday<b>:</b></span><span>08:00 am to 06:00 pm</span>
                                                <ul class="sf-bh-breaktime"></ul>
                                            </li>
                                            <li>
                                                <span>Saturday<b>:</b></span><span>Closed</span>
                                            </li>
                                            <li>
                                                <span>Sunday<b>:</b></span><span>Closed</span>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sf-provi-coInfo-box">
                                        <h5>Address</h5>
                                        <div class="sf-provi-coInfo-text">William Spyropoulos School 732 Northern Blvd Queens NY, New York, United States</div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sf-provi-coInfo-box">
                                        <h5>Telephone</h5>
                                        <div class="sf-provi-coInfo-text">Tel: +01 2344 567 895</div>
                                        <div class="sf-provi-coInfo-text">Mob: +1 2364 567 895</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sf-provi-coInfo-box">
                                        <h5>Email</h5>
                                        <div class="sf-provi-coInfo-text">davidwood15@gmail.com</div>
                                        <div class="sf-provi-coInfo-text">zohansmth@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sf-provi-coInfo-box">
                                        <h5>Web</h5>
                                        <div class="sf-provi-coInfo-text">https://aonetheme.com/service-finder</div>
                                        <div class="sf-provi-coInfo-text">https://aonetheme.com/service-finder</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Language-->
                            <div class="sf-provi-laexce-box m-b50">
                                <div class="sf-custom-tabs sf-custom-new">
                                  <ul class="nav nav-tabs nav-table-cell font-20">
                                    <li class="active"><a data-toggle="tab" href="#tab-111">Language </a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-222">Experience</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-333">Certificates & Awards </a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div id="tab-111" class="tab-pane active">
                                      <div class="sf-languages-tab">
                                        <ul class="sf-languages-list sf-languages-list-new clearfix">
                                            <li><span><img src="{{asset('frontend/assets/images/maps/af.png')}}" alt=""></span> Afrikaans</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/ar.png')}}" alt=""></span> Arabic</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/ca.png')}}" alt=""></span> Catalan</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/da.png')}}" alt=""></span> Danish</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/de.png')}}" alt=""></span> German</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/fr.png')}}" alt=""></span> French</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/ga.png')}}" alt=""></span> Irish</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/th.png')}}" alt=""></span> Thai</li>
                                            <li><span><img src="{{asset('frontend/assets/images/maps/tr.png')}}" alt=""></span> Turkish</li>
                                        </ul>

                                      </div>
                                    </div>
                                    <div id="tab-222" class="tab-pane ">
                                      <div class="sf-document-tab">
                                        <div class="sf-experience-acord" id="experience-acord">
                                          <div class="panel sf-panel">
                                            <div class="acod-head acc-actives">
                                              <h6 class="acod-title text-uppercase"> <a data-toggle="collapse" href="#experience34" data-parent="#experience-acord"> <span class="exper-author">Java Programmer</span> <span class="exper-slogan">Tata Consultancy Pvt. Ltd.</span> <span class="exper-date"><i class="fa fa-clock-o"></i> Jul 01 2018 -  Jul 01 2020</span> </a></h6>
                                            </div>
                                            <div id="experience34" class="acod-body collapse in">
                                              <div class="acod-content p-tb15">I am working as senior Java Programmer.</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="tab-333" class="tab-pane ">
                                      <div class="sf-document-tab">
                                        <ul class="sf-certificates-list">
                                          <li>
                                            <div class="awards-pic"><img src="{{asset('frontend/assets/images/java-150x150-34.jpg')}}" alt=""></div>
                                            <span class="awards-title">Java Certified Programmer</span> <span class="awards-date"><i class="fa fa-clock-o"></i> Mar 12 2019</span>
                                            <div class="awards-text"></div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            </div>

                            <!-- Video-->
                            <div class="sf-provi-vido-box m-b50" id="aon-provider-video">
                                <h3 class="sf-provi-title">Video</h3>
                                <div class="sf-divider-line"></div>
                                <div class="owl-carousel aon-video-carousel aon-owl-arrow">
                                    <!-- COLUMNS 1 -->
                                    <div class="item">
                                        <div class="sf-video-box">
                                            <div class="sf-video-pic" style="background-image:url(images/video/pic1.jpg')}})"></div>
                                            <a class="sf-video-play-btn mfp-video" href="https://www.youtube.com/watch?v=GLhzTrtGO3A"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 2 -->
                                    <div class="item">
                                        <div class="sf-video-box">
                                            <div class="sf-video-pic" style="background-image:url(images/video/pic2.jpg')}})"></div>
                                            <a class="sf-video-play-btn mfp-video" href="https://www.youtube.com/watch?v=GLhzTrtGO3A"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 3 -->
                                    <div class="item">
                                        <div class="sf-video-box">
                                            <div class="sf-video-pic" style="background-image:url(images/video/pic3.jpg')}})"></div>
                                            <a class="sf-video-play-btn mfp-video" href="https://www.youtube.com/watch?v=GLhzTrtGO3A"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 4 -->
                                    <div class="item">
                                        <div class="sf-video-box">
                                            <div class="sf-video-pic" style="background-image:url(images/video/pic1.jpg')}})"></div>
                                            <a class="sf-video-play-btn mfp-video" href="https://www.youtube.com/watch?v=GLhzTrtGO3A"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Amenities-->
                            <div class="sf-provi-amqudo-box m-b50">
                                <div class="sf-custom-tabs sf-custom-new">
                                  <ul class="nav nav-tabs nav-table-cell font-20">
                                    <li class="active"><a data-toggle="tab" href="#tab-1111">Amenities & Features  </a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2222">Qualification</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3333">Documents</a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div id="tab-1111" class="tab-pane active">
                                      <div class="sf-languages-tab">
                                        <ul class="sf-features-list sf-features-list-new clearfix">
                                          <li><span class="features-icon"><img src="{{asset('frontend/assets/images/amenities/credit_card-20x20.png')}}" alt=""></span> Accepts Credit Cards</li>
                                          <li><span class="features-icon"><img src="{{asset('frontend/assets/images/amenities/coffee-1-20x20.png')}}" alt=""></span> Coffee</li>
                                          <li><span class="features-icon"><img src="{{asset('frontend/assets/images/amenities/coupons-20x20.png')}}" alt=""></span> Coupons</li>
                                          <li><span class="features-icon"><img src="{{asset('frontend/assets/images/amenities/car-20x20.png')}}" alt=""></span> Parking street</li>
                                          <li><span class="features-icon"><img src="{{asset('frontend/assets/images/amenities/wheelchair-20x20.png')}}" alt=""></span> Wheelchair Accesible</li>
                                          <li><span class="features-icon"><img src="{{asset('frontend/assets/images/amenities/wifi-20x20.png')}}" alt=""></span> Wireless Internet</li>
                                        </ul>

                                      </div>
                                    </div>
                                    <div id="tab-2222" class="tab-pane ">
                                      <div class="sf-documents-tab">
                                        <div class="sf-qualification-acord" id="qualification-acord">
                                          <div class="panel sf-panel">
                                            <div class="acod-head acc-actives">
                                              <h6 class="acod-title text-uppercase"> <a data-toggle="collapse" href="#qualification34" data-parent="#qualification-acord"> <span class="exper-author"> B.Tech</span> <span class="exper-slogan">Charles Andrew University</span> <span class="exper-date"><i class="fa fa-clock-o"></i> 2012 -  2016</span> </a></h6>
                                            </div>
                                            <div id="qualification34" class="acod-body collapse in">
                                              <div class="acod-content p-tb15">I am an engineer and have B.Tech degree.</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="tab-3333" class="tab-pane ">
                                      <div class="sf-documents-tab">
                                        <div class="table-responsive">
                                          <table class="table borderless margin-0">
                                            <tbody>
                                              <tr>
                                                <td><div class="panel panel-default">
                                                    <div class="panel-heading"> <a download="Microsoft-Office-Excel-Worksheet-46.xlsx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-Excel-Worksheet-46.xlsx</span> </a></div>
                                                  </div></td>
                                                <td><div class="panel panel-default">
                                                    <div class="panel-heading"> <a download="Microsoft-Office-PowerPoint-Presentation-28.pptx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-PowerPoint-Presentation-28.pptx</span> </a></div>
                                                  </div></td>
                                              </tr>
                                              <tr>
                                                <td><div class="panel panel-default">
                                                    <div class="panel-heading"> <a download="Microsoft-Office-Word-Document-26.docx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-Word-Document-26.docx</span> </a></div>
                                                  </div></td>
                                                <td><div class="panel panel-default">
                                                    <div class="panel-heading"> <a download="PDF-Document-28.pdf" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">PDF-Document-28.pdf</span> </a></div>
                                                  </div></td>
                                              </tr>
                                              <tr>
                                                <td><div class="panel panel-default">
                                                    <div class="panel-heading"> <a download="Text-Document-26.txt" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Text-Document-26.txt</span> </a></div>
                                                  </div></td>
                                                <td><div class="panel panel-default">
                                                    <div class="panel-heading"> <a download="Microsoft-Office-PowerPoint-Presentation-29.pptx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-PowerPoint-Presentation-29.pptx</span> </a></div>
                                                  </div></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            </div>

                            <!-- Articles-->
                            <div class="sf-provi-articles-box m-b50" id="aon-provider-articles">
                                <h3 class="sf-provi-title">Articles</h3>
                                <div class="sf-divider-line"></div>

                                <ul class="sf-provi-articles-list">
                                	<li>
                                    	<div class="sf-provi-art-list d-flex flex-wrap">
                                        	<div class="sf-provi-art-left d-flex flex-wrap">
                                            	<div class="sf-provi-art-pic"><img src="{{asset('frontend/assets/images/pro-pic/pic1.jpg')}}" alt=""></div>
                                                <div class="sf-provi-art-date"><i class="fa fa-calendar-o"></i> May 18, t2020</div>
                                                <div class="sf-provi-art-comment"><i class="fa fa-comment-o"></i> Comments (25)</div>
                                            </div>
                                            <div class="sf-provi-art-right d-flex flex-wrap">
                                            	<h4  class="sf-provi-art-title">Make a medical negligence claim today</h4>
                                                <div class="sf-provi-art-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                                                <a href="blog-detail.html" class="sf-provi-art-btn">Read More</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                    	<div class="sf-provi-art-list d-flex flex-wrap">
                                        	<div class="sf-provi-art-left d-flex flex-wrap">
                                            	<div class="sf-provi-art-pic"><img src="{{asset('frontend/assets/images/pro-pic/pic2.jpg')}}" alt=""></div>
                                                <div class="sf-provi-art-date"><i class="fa fa-calendar-o"></i> May 18, t2020</div>
                                                <div class="sf-provi-art-comment"><i class="fa fa-comment-o"></i> Comments (25)</div>
                                            </div>
                                            <div class="sf-provi-art-right d-flex flex-wrap">
                                            	<h4  class="sf-provi-art-title">There are two thing is very important</h4>
                                                <div class="sf-provi-art-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                                                <a href="blog-detail.html" class="sf-provi-art-btn">Read More</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                    	<div class="sf-provi-art-list d-flex flex-wrap">
                                        	<div class="sf-provi-art-left d-flex flex-wrap">
                                            	<div class="sf-provi-art-pic"><img src="{{asset('frontend/assets/images/pro-pic/pic3.jpg')}}" alt=""></div>
                                                <div class="sf-provi-art-date"><i class="fa fa-calendar-o"></i> May 18, t2020</div>
                                                <div class="sf-provi-art-comment"><i class="fa fa-comment-o"></i> Comments (25)</div>
                                            </div>
                                            <div class="sf-provi-art-right d-flex flex-wrap">
                                            	<h4  class="sf-provi-art-title">Deserunt mollit anim id est labrum</h4>
                                                <div class="sf-provi-art-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</div>
                                                <a href="blog-detail.html" class="sf-provi-art-btn">Read More</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                            <!-- Q & A-->
                            <div class="sf-provi-amqudo-box m-b50">
                                <div class="sf-custom-tabs sf-custom-new">
                                  <ul class="nav nav-tabs nav-table-cell font-20">
                                    <li class="active"><a data-toggle="tab" href="#tab-11111">Q & A</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-22222">Ask Question</a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div id="tab-11111" class="tab-pane active">
                                        <ul class="sf-qes-answer-list">
                                            <li>
                                                <h5 class="sf-qestion-line">1. What is the return policy? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                            <li>
                                                <h5 class="sf-qestion-line">2. What are the shipping options? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                            <li>
                                                <h5 class="sf-qestion-line">3. What do I do if I never received my order? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                            <li>
                                                <h5 class="sf-qestion-line">4. When will I receive my order? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                            <li>
                                                <h5 class="sf-qestion-line">5. How do I make sure I order the right size? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                            <li>
                                                <h5 class="sf-qestion-line">6. Where are you located? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="tab-22222" class="tab-pane ">
                                        <ul class="sf-qes-answer-list">
                                            <li>
                                                <h5 class="sf-qestion-line">1. What is the return policy? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                            <li>
                                                <h5 class="sf-qestion-line">2. What are the shipping options? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>
                                            <li>
                                                <h5 class="sf-qestion-line">3. What do I do if I never received my order? <i class="fa fa-plus"></i></h5>
                                                <div class="sf-answer-line">I had a v small superficial cut and my dog's saliva accidentally touched it.  His yearly rabies shot is pending and a few days back he ran away should I get vaccinated.</div>
                                            </li>


                                        </ul>
                                    </div>
                                  </div>
                                </div>

                            </div>

                            <!-- Customer Reviews-->
                            <div class="sf-provi-articles-box m-b50" id="aon-provider-review">
                                <h3 class="sf-provi-title">Local Customer Reviews</h3>
                                <div class="sf-divider-line"></div>

                                <div class="sf-rating-outer sf-rating-outer-border clearfix">

                                  <div class="sf-rating-averages-wraps sf-rating-averages-new">
                                    <div class="sf-rating-averages-table">
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-rating-holder"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                      </div>
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">0</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sf-rating-averages-table">
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-average-rating&amp;review"><span>4.8 stars</span> - <span>921 reviews</span></div>
                                      </div>
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">0</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sf-rating-averages-table">
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-completion-rate"> <span class="sf-rate-persent">92% Completion Rate</span>
                                            <span class="sf-average-question" id="example" data-toggle="tooltip" data-placement="top" title="" data-original-title="625 North Washington St, Suite 400, Alexandria, Virginia, United States"> <i class="fa fa-question-circle"></i> </span></div>
                                      </div>
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">0</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sf-rating-averages-table">
                                      <div class="sf-rating-averages-cell"> <span class="sf-completed-tasks">1081 completed tasks</span></div>
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">0</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sf-rating-averages-table">
                                      <div class="sf-rating-averages-cell"></div>
                                      <div class="sf-rating-averages-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">0</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sf-rating-categories-wraps sf-rating-categories-new">
                                    <div class="sf-rating-categories-table">
                                      <div class="sf-rating-categories-cell">Quality</div>
                                      <div class="sf-rating-categories-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">4.7</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sf-rating-categories-table">
                                      <div class="sf-rating-categories-cell">Cost</div>
                                      <div class="sf-rating-categories-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">3.8</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sf-rating-categories-table">
                                      <div class="sf-rating-categories-cell">Response Time</div>
                                      <div class="sf-rating-categories-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">2.6</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sf-rating-categories-table">
                                      <div class="sf-rating-categories-cell">Timeline</div>
                                      <div class="sf-rating-categories-cell">
                                        <div class="sf-reviews-row">
                                          <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                          <div class="sf-reviews-star-no">1.6</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                                <div class="row d-flex flex-wrap a-b-none">
                                    <div class="col-md-6">
                                        <div class="sf-review-box sf-shadow-box">
                                          <div class="sf-review-head clearfix">
                                                <div class="sf-review-pic"><img src="{{asset('frontend/assets/images/pro-pic/pic1.jpg')}}" alt="#"></div>
                                                <div class="sf-review-info">
                                                  <h5 class="sf-review-name">Zohn Odriscoll</h5>
                                                  <div class="sf-review-feedback">Good service</div>
                                                </div>
                                              <div class="sf-review-date">March 12, 2022 at 5:40 am</div>
                                          </div>
                                          <div class="sf-review-body">
                                            <ul class="sf-review-rating d-flex flex-wrap">
                                                <li>
                                                    <div class="sf-customer-rating-names">Quality</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Cost</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Response Time</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Timeline</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                          </div>

                                          <div class="sf-review-footer sf-shadow-box">
                                            <span class="sf-review-write">Good service ipsum dolor sit amet, consectetur adipiscing elit vitae is vitae sapien.</span>
                                            <span class="sf-review-red-less">Read More</span>
                                          </div>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sf-review-box sf-shadow-box">
                                          <div class="sf-review-head clearfix">
                                                <div class="sf-review-pic"><img src="{{asset('frontend/assets/images/pro-pic/pic2.jpg')}}" alt="#"></div>
                                                <div class="sf-review-info">
                                                  <h5 class="sf-review-name">Mila Kunis</h5>
                                                  <div class="sf-review-feedback">Good service</div>
                                                </div>
                                              <div class="sf-review-date">March 12, 2022 at 5:40 am</div>
                                          </div>
                                          <div class="sf-review-body">
                                            <ul class="sf-review-rating d-flex flex-wrap">
                                                <li>
                                                    <div class="sf-customer-rating-names">Quality</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Cost</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Response Time</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Timeline</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                          </div>

                                          <div class="sf-review-footer sf-shadow-box">
                                            <span class="sf-review-write">Good service ipsum dolor sit amet, consectetur adipiscing elit vitae is vitae sapien.</span>
                                            <span class="sf-review-red-less">Read More</span>
                                          </div>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sf-review-box sf-shadow-box">
                                          <div class="sf-review-head clearfix">
                                                <div class="sf-review-pic"><img src="{{asset('frontend/assets/images/pro-pic/pic3.jpg')}}" alt="#"></div>
                                                <div class="sf-review-info">
                                                  <h5 class="sf-review-name">Jackie Chan</h5>
                                                  <div class="sf-review-feedback">Good service</div>
                                                </div>
                                              <div class="sf-review-date">March 12, 2022 at 5:40 am</div>
                                          </div>
                                          <div class="sf-review-body">
                                            <ul class="sf-review-rating d-flex flex-wrap">
                                                <li>
                                                    <div class="sf-customer-rating-names">Quality</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Cost</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Response Time</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Timeline</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                          </div>

                                          <div class="sf-review-footer sf-shadow-box">
                                            <span class="sf-review-write">Good service ipsum dolor sit amet, consectetur adipiscing elit vitae is vitae sapien.</span>
                                            <span class="sf-review-red-less">Read More</span>
                                          </div>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sf-review-box sf-shadow-box">
                                          <div class="sf-review-head clearfix">
                                                <div class="sf-review-pic"><img src="{{asset('frontend/assets/images/pro-pic/pic4.jpg')}}" alt="#"></div>
                                                <div class="sf-review-info">
                                                  <h5 class="sf-review-name">James McAvoy</h5>
                                                  <div class="sf-review-feedback">Good service</div>
                                                </div>
                                              <div class="sf-review-date">March 12, 2022 at 5:40 am</div>
                                          </div>
                                          <div class="sf-review-body">
                                            <ul class="sf-review-rating d-flex flex-wrap">
                                                <li>
                                                    <div class="sf-customer-rating-names">Quality</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Cost</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Response Time</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sf-customer-rating-names">Timeline</div>
                                                    <div class="sf-customer-rating-star">
                                                        <div class="sf-ow-pro-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star text-gray"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                          </div>

                                          <div class="sf-review-footer sf-shadow-box">
                                            <span class="sf-review-write">Good service ipsum dolor sit amet, consectetur adipiscing elit vitae is vitae sapien.</span>
                                            <span class="sf-review-red-less">Read More</span>
                                          </div>


                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="site-button">Load More</button>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!-- Left part END -->


                    </div>
                </div>
            <!-- Left & right section  END -->

            </div>
        <!-- Content END-->
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
                        	<span>Copyright 2022 | Aone Theme. All Rights Reserved</span>
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
                                                    <input class="form-control sf-form-control" name="company_name" type="text" placeholder="User Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="company_name" type="password" placeholder="Password">
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
                                <form class="aon-login-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="First_Name" type="text" placeholder="First Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="company_name" type="password" placeholder="Last Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="Phone" type="password" placeholder="Phone">
                                                    <i class="aon-input-icon fa fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="email" type="password" placeholder="Email">
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
                                                    <input class="form-control sf-form-control" name="password" type="password" placeholder="Confirm Password">
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




<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
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


<!-- Mirrored from aonetheme.com/sf-html-demo/profile-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:54:06 GMT -->
</html>
