<!DOCTYPE html>

<html class="no-js" lang="zxx">


<!-- Mirrored from aonetheme.com/sf-html-demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:54:16 GMT -->

<head>
    <!-- META -->

    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16535550826">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-16535550826');
        </script>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="" />

    <meta name="author" content="" />

    <meta name="robots" content="" />

    <meta name="description" content="" />

    <!-- FAVICONS ICON -->

    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.html') }}" type="image/x-icon" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logowise.jpeg') }}" />



    <!-- PAGE TITLE HERE -->

    <title> Contact Us</title>

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
  function gtag(){dataLayer.push(arguments);}
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

    <div class="page-wraper">



        <!-- HEADER START -->

        @include('header')

        <!-- HEADER END -->



        <!-- Content -->

        <div class="page-content">

            <!--Banner-->

            <div class="aon-page-benner-area">

                <div class="aon-page-banner-row"
                    style="background-image: url({{ asset('frontend/assets/images/banner/job-banner.jpg') }})">

                    <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>

                    <div class="sf-banner-heading-wrap">

                        <div class="sf-banner-heading-area">

                            <div class="sf-banner-heading-large">Contact Us</div>

                            <div class="sf-banner-breadcrumbs-nav">

                                <ul class="list-inline">

                                    <li><a href="{{url('/')}}"> Home </a></li>

                                    <li>Contact us</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!--Banner-->



            <!-- Contact Us-->

            <div class="aon-contact-area">

                <div class="container">

                    <!--Title Section Start-->

                    <div class="section-head text-center">

                        <h2 class="sf-title">Contact Information</h2>

                        <p>Please feel free to reach out to us using the contact details provided below.</p>

                    </div>

                    <!--Title Section End-->



                    <div class="section-content">



                        <div class="sf-contact-info-wrap">

                            <div class="row">



                                <!-- COLUMNS 1 -->

                                <div class="col-lg-4 col-md-6">

                                    <div class="sf-contact-info-box">

                                        <div class="sf-contact-icon">

                                            <span><img src="{{ asset('frontend/assets/images/contact-us/1.png') }}"
                                                    alt=""></span>

                                        </div>

                                        <div class="sf-contact-info">

                                            <h4 class="sf-title">Mailing Address</h4>

                                            <p> 88, Borewell Rd, Palm Meadows, Whitefield, Bengaluru, Karnataka 560066</p>

                                        </div>

                                    </div>

                                </div>

                                <!-- COLUMNS 2 -->

                                <div class="col-lg-4 col-md-6">

                                    <div class="sf-contact-info-box">

                                        <div class="sf-contact-icon">

                                            <span><img src="{{ asset('frontend/assets/images/contact-us/2.png') }}"
                                                    alt=""></span>

                                        </div>

                                        <div class="sf-contact-info">

                                            <h4 class="sf-title">Email Info</h4>

                                            <p>Contact@wiseplix.com</p>

                                        </div>

                                    </div>

                                </div>

                                <!-- COLUMNS 3 -->

                                <div class="col-lg-4 col-md-6">

                                    <div class="sf-contact-info-box">

                                        <div class="sf-contact-icon">

                                            <span><img src="{{ asset('frontend/assets/images/contact-us/3.png') }}"
                                                    alt=""></span>

                                        </div>

                                        <div class="sf-contact-info">

                                            <h4 class="sf-title">Phone Number</h4>

                                            <p>+91 740 656 3253</p>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                        <div class="sf-contact-form-wrap">

                            <!--Contact Information-->

                            <div class="sf-contact-form">

                                <div class="sf-con-form-title text-center">

                                    <h2 class="m-b30">Contact Information</h2>

                                </div>

                                <form class="contact-form" method="post" id="contact-form">
                                    @csrf
                                    <div class="row">
                                        <!-- COLUMNS 1 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="name" placeholder="Name"
                                                    class="form-control" id="name">
                                                <span class="text-danger" id="name-error"></span>
                                            </div>

                                        </div>



                                        <!-- COLUMNS 2 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="email" placeholder="Email"
                                                    class="form-control" id="email">
                                                <span class="text-danger" id="email-error"></span>
                                            </div>

                                        </div>

                                        <!-- COLUMNS 3 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="phone" placeholder="Phone"
                                                    class="form-control" id="phone">
                                                <span class="text-danger" id="phone-error"></span>
                                            </div>

                                        </div>

                                        <!-- COLUMNS 4 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="subject" placeholder="Subject"
                                                    class="form-control" id="subject">
                                                <span class="text-danger" id="subject-error"></span>
                                            </div>

                                        </div>



                                        <!-- COLUMNS 5 -->

                                        <div class="col-md-12">

                                            <div class="form-group">

                                                <textarea name="message" placeholder="Message" class="form-control" id="message"></textarea>
                                                <span class="text-danger" id="message-error"></span>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="sf-contact-submit-btn">

                                        <button class="site-button" type="submit">Submit</button>

                                    </div>

                                </form>

                            </div>

                            <!--Contact Information End-->

                        </div>

                    </div>



                </div>

            </div>



            <!-- Contact Us-->

            <div class="section-full sf-contact-map-area">

                <div class="container">



                    <div class="sf-map-social-block text-center">

                        <h2>Trusted by thousands of people all over the world</h2>

                        <ul class="sf-con-social">

                            <li><a href="#" class="sf-fb"><img
                                        src="{{ asset('frontend/assets/images/contact-us/facebook.png') }}"
                                        alt="">Facebook</a></li>

                            <li><a href="#" class="sf-twitter"><img
                                        src="{{ asset('frontend/assets/images/contact-us/twitter.png') }}"
                                        alt="">Twitter</a></li>

                            <li><a href="#" class="sf-pinterest"><img
                                        src="{{ asset('frontend/assets/images/contact-us/pinterest.png') }}"
                                        alt="">Pinterest</a></li>

                        </ul>



                        <div class="sf-con-social-pic">

                            <span class="img-pos-1"><img
                                    src="{{ asset('frontend/assets/images/contact-us/img1.png') }}"
                                    alt=""></span>

                            <span class="img-pos-2"><img
                                    src="{{ asset('frontend/assets/images/contact-us/img2.png') }}"
                                    alt=""></span>

                            <span class="img-pos-3"><img
                                    src="{{ asset('frontend/assets/images/contact-us/img3.png') }}"
                                    alt=""></span>

                            <span class="img-pos-4"><img
                                    src="{{ asset('frontend/assets/images/contact-us/r-img1.png') }}"
                                    alt=""></span>

                            <span class="img-pos-5"><img
                                    src="{{ asset('frontend/assets/images/contact-us/r-img2.png') }}"
                                    alt=""></span>

                            <span class="img-pos-6"><img
                                    src="{{ asset('frontend/assets/images/contact-us/r-img3.png') }}"
                                    alt=""></span>

                        </div>

                    </div>



                </div>

                <div class="sf-map-wrap">

                    <div class="gmap-area">

                        <iframe
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

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


    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contact-form').on('submit', function(event) {
            event.preventDefault();
            $('#name-error').text('');
            $('#email-error').text('');
            $('#phone-error').text('');
            $('#subject-error').text('');
            $('#message-error').text('');

            name = $('#name').val();
            email = $('#email').val();
            phone = $('#phone').val();
            subject = $('#subject').val();
            message = $('#message').val();
            console.log(name);
            console.log(email);
            console.log(phone);
            console.log(subject);
            console.log(message);
            $.ajax({
                url: "/contact-us",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    subject: subject,
                    message: message,
                },
                success: function(response) {
                    console.log(response);
                    if (response) {
                        $('#success-message').text(response.success);
                        $("#contact-form")[0].reset();
                    }
                },
                error: function(response) {
                    $('#name-error').text(response.responseJSON.errors.name);
                    $('#email-error').text(response.responseJSON.errors.email);
                    $('#phone-error').text(response.responseJSON.errors.phone);
                    $('#subject-error').text(response.responseJSON.errors.subject);
                    $('#message-error').text(response.responseJSON.errors.message);
                }
            });
        });
    </script>

    <!-- JAVASCRIPT  FILES ========================================= -->

    {{-- <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS --> --}}

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
