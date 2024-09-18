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
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.html') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logowise.jpeg') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Profile</title>

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


    <style>
        label{font-weight: 700;color: #000;margin-bottom: 0.25rem}
        .form-group{
            margin-bottom: .8rem !important;
        }
        .form-control{
            border: 1px solid #e1e1e1 !important;
            height: 40px !important;
            font-size: 14px !important;
            line-height: 20px !important;
            padding: 10px 12px !important;
            border-radius: 5px !important;
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
    <div class="page-wraper"> <!-- HEADER START -->
        @include('header')
        <!-- HEADER END -->

        <!-- Content -->
        <div class="page-content">

            <!-- Banner start -->
            <div class="sf-profile-banner">
                <div class="container sf-proBnr-container">
                    <div class="sf-proBnr-row row">
                        <div class="col-md-12 sf-proBnr-left text-center">
                            <div class=" mb-2">

                                    @if (auth()->user()->user_img !=  null)
                                        <img src="{{asset('images/user/'.auth()->user()->user_img)}}" alt=""  style="width:150px;">
                                    @else
                                        <img src="{{asset('images/profile-user.png')}}" style="width:150px;height:150px" alt="">
                                    @endif


                                </div>
                            <h3 class="">{{ $user_id->name }}</h3>
                            <div class="sf-provi-tagline">{{ $user_id->email }}</div>
                            <div class="sf-provi-tagline">{{ $user_id->mobille }}</div>

                            <div class="my-3">
                                <a href="#" type="button" data-toggle="modal" data-target="#updateProfileModal" class="btn btn-info">Edit Profile</a>
                            </div>
                                

                            <div class="sf-provi-gallery">
                                <a class="elem pic-long"
                                    href="{{ asset('frontend/assets/images/profile/pic2.jpg') }}"></a>
                                <a class="elem pic-long"
                                    href="{{ asset('frontend/assets/images/profile/pic3.jpg') }}"></a>
                                <a class="elem pic-long"
                                    href="{{ asset('frontend/assets/images/profile/pic4.jpg') }}"></a>
                                <a class="elem pic-long"
                                    href="{{ asset('frontend/assets/images/profile/pic5.jpg') }}"></a>
                                <a class="elem pic-long"
                                    href="{{ asset('frontend/assets/images/profile/pic6.jpg') }}"></a>
                            </div>
                            
                            {{-- <div class="sf-provi-social">
                                <ul class="share-social-bx">
                                    <li class="fb"><a href="javascript:;"> <i class="fa fa-facebook"></i> Share </a></li>
                                    <li class="tw"><a href="javascript:;"> <i class="fa fa-twitter"></i> Share </a></li>
                                    <li class="lin"><a href="javascript:;"> <i class="fa fa-linkedin"></i> Share </a></li>
                                    <li class="pin"><a href="javascript:;"> <i class="fa fa-pinterest"></i> Share </a></li>
                                    <li class="gp"><a href="javascript:;"> <i class="fa fa-google-plus"></i> Share </a></li>
                                    <li class="dig"><a href="javascript:;"> <i class="fa fa-digg"></i> Share </a> </li>
                                </ul>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!--Nav Section Start-->
            {{-- <div class="sf-page-scroll-wrap sf-page-scroll-wrap2">
                <div class="container">
                    <div class="sf-page-scroll-nav clearfix">
                        <ul class="clearfix">
                            <li><a href="#aon-provider-info">My Profile</a></li>
                            <li><a href="#aon-provider-services">Lead Requests</a></li>
                            <li><a href="#aon-provider-coInfo">Contact Info</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <!--Nav Section End-->

            <!-- Left & right section start -->
            <div class="container">

                <div class="row">

                    <!--Left Section-->
                    {{-- <div class="col-lg-4 col-md-12">

                        <aside class="sf-sidebar-left">

                            <h3 class="sf-sidebar-title">Request a Quote</h3>

                            <div class="p-a30  m-b30  bg-white sf-shadow-box sf-border-box sf-radius-10">
                                <div class="form-quot-bx">
                                    <form action=""
                                        method="post">
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
                                            <button type="submit" class="site-button btn-block">Send
                                                information</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </aside>

                    </div> --}}
                    <!--Left Section End-->

                    <!-- right part start -->
                    <div class="col-lg-12 col-md-12">
                        <!-- Services Detail-->
                        <div class="sf-provi-bio-box m-b50">
                            {{-- <h3 class="sf-provi-title">About</h3>
                            <div class="sf-divider-line"></div>
                            <div class="sf-provi-cat"><strong>Categories:</strong> Packers and Movers</div>
                            <div class="sf-provi-bio-text">

                                <p>We have a wide spectrum of expertise in web solutions within these industries, giving
                                    us the necessary skills and knowledge to help you increase your presence on the
                                    web.Through our expertise, technological knowledge, global presence and betspoke web
                                    solutions, we can help knowledge to help you increase your presence you transform
                                    your business, maximize performance and surpass the competition.</p>

                            </div> --}}


                            {{-- <div class="social-share-icon social-share-icon2">
                                <div class="social-share-cell">
                                    <strong>Explore Us On Social Media</strong>
                                </div>
                                <div class="social-share-cell">
                                    <ul class="share-buttons">
                                        <li><a class="fb-share" href="https://www.facebook.com/" target="_blank"
                                                rel="nofollow"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter-share" href="https://twitter.com/" target="_blank"
                                                rel="nofollow"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="linkedin-share" href="https://linkedin.com/" target="_blank"
                                                rel="nofollow"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="pinterest-share" href="https://in.pinterest.com/"
                                                target="_blank" rel="nofollow"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}

                        </div>

                        <div class="sf-provi-service-box  m-b50" id="aon-provider-info">
{{-- 

                            <h3 class="sf-provi-title">My Profile</h3>
                            <div class="sf-divider-line"></div>

                            <div class="p-a30  m-b30  bg-white sf-shadow-box sf-border-box sf-radius-10">
                                <div class="form-quot-bx">
                                    <form action=""
                                        method="post">
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
                                            <button type="submit" class="site-button btn-block">Send
                                                information</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div> --}}



                        <!-- Services -->
                        <div class="sf-provi-service-box  m-b50" id="aon-provider-services">
                            <h3 class="sf-provi-title">Lead Requests</h3>
                            <div class="sf-divider-line"></div>
                            <ul class="sf-provi-service-list border-0">

                                @if (count($myreq) > 0)
    
                                    @foreach ($myreq as $item)
                                        <li class="sf-provi-service-box">
    
                                            <div class="sf-provi-service-top">
                                                <div class="sf-provi-service-left">
                                                    
                                                    <h4 class="sf-provi-service-ttle"><span class="sf-provi-toggle-btn">+</span>
                                                        {{$item->name}} {{-- <span>Offer</span> --}}
                                                    </h4>
                                                    {{-- {{$item['answers']}} --}}
    
                                                    <div class="card my-3">
                                                        <div class="card-header">
                                                            <h6 class="mb-0" style="font-weight: 600">Lead Details</h6>
                                                        </div>
    
                                                        <div class="card-body">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Category</th>
                                                                        <th scope="col">Sub-Category</th>
                                                                        <th scope="col">Q/A</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">PinCode</th>
                                                                        <th scope="col">Action</th>
    
                                                                        {{-- <th scope="col">Area</th>
                                                                        <th scope="col">District</th>
                                                                        <th scope="col">State</th> --}}
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">{{$item->category['alt_name']}}</th>
                                                                        <td>
                                                                            {{$item->subcategory->slug}}
                                                                    
                                                                        </td>
                                                                        <td>
                                                                            @if ($item && $item->answers)
                                                                                @php
                                                                                    $answers = json_decode($item->answers, true);
                                                                                @endphp
                                                                            
                                                                                @if ($answers && is_array($answers))
                                                                                    
    
                                                                                        @foreach ($answers as $answer)
                                                                                            Question: {{ $answer['question'] ?? '-' }}  <br>
                                                                                            Answer: {{ $answer['answer'] ?? '-' }} <br> <br>
                                                                                        @endforeach
                                                                                
                                                                                @else                                                        
                                                                                    -
                                                                                @endif
                                                                                
                                                                            @else
                                                                                NA
                                                                            @endif
                                                                        </td>
                                                                        <td>
    
                                                                            @if ($item->status == 1)
                                                                                <span class="badge bg-info text-light">Open</span>
                                                                            @else
                                                                                <span class="badge bg-danger text-light">Closed</span>
                                                                            @endif
    
                                                                        </td>
                                                                        <td>{{$item->pin_code}}</td>
                                                                        <td>
    
                                                                            <form id="statusForm-{{$item->id}}" action="{{route('lead-status.update', $item->id)}}" method="POST" style="display:none;">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <input type="hidden" name="status" id="statusInput-{{$item->id}}" value="{{ $item->status == 1 ? 0 : 1 }}">
                                                                            </form>
    
                                                                            <button onclick="toggleStatus({{$item->id}})" class="btn btn-warning btn-sm">
    
                                                                                @if ($item->status == 1)
                                                                                    Close
                                                                                @elseif ($item->status == 0)
                                                                                    Re-Open
                                                                                @endif
    
                                                                            </button>
    
                                                                            <script>
                                                                                function toggleStatus(id) {
                                                                                    const form = document.getElementById('statusForm-' + id);
                                                                                    // const statusInput = document.getElementById('statusInput-' + id);
                                                                                    // statusInput.value = statusInput.value === 1 ? 0 : 1;
                                                                                    form.submit();
                                                                                }
                                                                            </script>
    
                                                                            {{-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#statusUpdateModal" data-id="{{$item->id}}">Update Status</button> --}}
                                                                        </td>
    
                                                                        {{-- <td></td>
                                                                        <td></td>
                                                                        <td></td> --}}
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
    
    
                                                    
    
                                                    {{-- <div class="sf-provi-service-price">RS124.00</div> --}}
                                                    
                                                    
                                                    
                                                    <div class="sf-provi-service-hour"><i class="fa fa-clock-o"></i>{{date('d M, Y', strtotime($item->created_at)) }}</div>
                                                
                                                </div>
    
                                                
    
                                            </div>
                                            <div class="sf-provi-service-bottom">
                                                <div class="sf-provi-descriptio">Mobile : {{$item->mobile}}</div>
                                                <div class="sf-provi-descriptio">Email : {{$item->email}}</div>
                                                
                                                @if (count($item->getPurchaseDetails) > 0)
                                                    <div class="sf-provi-descriptio">
                                                        <div class="card my-3">
                                                            <div class="card-header">
                                                                <h6 class="mb-0" style="font-weight: 600">Contacted By</h6>
                                                            </div>
    
                                                            <div class="card-body">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Name</th>
                                                                            <th scope="col">Associate Profile</th>
                                                                            <th scope="col">Status</th>
                                                                            <th scope="col">Message</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($item->getPurchaseDetails as $associate)
                                                                            
                                                                            <tr>
                                                                                <th scope="row">{{$associate->user['name'] ?? '-'}}</th>
                                                                                <td>
                                                                                    
                                                                                    @if ($associate->user->associate()->exists())                                                                                
                                                                                        <a class="btn btn-sm btn-dark" href="{{route('associate.profile', $associate->user->associate->id)}}">View Profile</a>
                                                                                    @endif
                                                                        
                                                                                </td>
                                                                                <td>
                                                                                    @if ($associate['status'] == 'pending')
                                                                                        <span class="badge bg-info text-light">Pending</span>
    
                                                                                    @elseif($associate['status'] == 'approved')
                                                                                        <span class="badge bg-success text-light">Approved</span>
                                                                                    @elseif($associate['status'] == 'rejected')
                                                                                        <span class="badge bg-danger text-light">Rejected</span>
    
                                                                                        @else
                                                                                        <span class="badge bg-info text-light">Pending</span>
    
                                                                                    
                                                                                    @endif
    
                                                                                </td>
                                                                                <td>{{$associate['message']}}</td>
                                                                                
                                                                                <td>
                                                                                    {{-- @if ($associate['status'] == 'pending')                                                                             --}}
                                                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateStatusModal" data-id="{{$associate->id}}">Update</button>
                                                                                    {{-- @endif --}}
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
    
                                            </div>
                                            
                                        </li>
                                    @endforeach
                                    
                                @else
                                        
                                    <h2 class="text-black font-bold mb-4" style="font-size: 2rem">You haven't placed any service request</h2>
                                    <a href="{{route('category')}}" class="btn btn-info ">Order Now</a>
                                        
                                @endif
                            </ul>

                        </div>

                        <!-- Cotact Information-->
                        {{-- <div class="sf-provi-coInfo-box m-b50" id="aon-provider-coInfo">
                            <h3 class="sf-provi-title">Contact Information</h3>
                            <div class="sf-divider-line"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sf-provi-coInfo-map">
                                        <div class="gmap-area">
                                            <iframe
                                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="sf-provi-coInfo-box">
                                        <h5>Address</h5>
                                        <div class="sf-provi-coInfo-text">88, Borewell Rd, Palm Meadows,
                                            Whitefield, Bengaluru,
                                            Karnataka 560066</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="sf-provi-coInfo-box">
                                        <h5>Telephone</h5>
                                        <div class="sf-provi-coInfo-text">Mob: +91 6362 567 895</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="sf-provi-coInfo-box">
                                        <h5>Email</h5>
                                        <div class="sf-provi-coInfo-text">davidwood15@gmail.com</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="sf-provi-coInfo-box">
                                        <h5>Web</h5>
                                        <div class="sf-provi-coInfo-text">aonetheme.com/service-finder</div>
                                        <div class="sf-provi-coInfo-text">aonetheme.com/service-finder</div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                        <!-- Customer Reviews-->
                        {{-- <div class="sf-provi-articles-box m-b50" id="aon-provider-review">
                            <h3 class="sf-provi-title"> Customer Reviews</h3>
                            <div class="sf-divider-line"></div>

                            <div class="sf-rating-outer sf-rating-outer-border clearfix">

                                <div class="sf-rating-averages-wraps sf-rating-averages-new">
                                    <div class="sf-rating-averages-table">
                                        <div class="sf-rating-averages-cell">
                                            <div class="sf-rating-holder"> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        </div>
                                        <div class="sf-rating-averages-cell">
                                            <div class="sf-reviews-row">
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <div class="sf-reviews-star-no">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sf-rating-averages-table">
                                        <div class="sf-rating-averages-cell">
                                            <div class="sf-average-rating&amp;review"><span>4.8 stars</span> -
                                                <span>921 reviews</span></div>
                                        </div>
                                        <div class="sf-rating-averages-cell">
                                            <div class="sf-reviews-row">
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i></div>
                                                <div class="sf-reviews-star-no">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sf-rating-averages-table">
                                        <div class="sf-rating-averages-cell">
                                            <div class="sf-completion-rate"> <span class="sf-rate-persent">92%
                                                    Completion Rate</span>
                                                <span class="sf-average-question" id="example"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="625 North Washington St, Suite 400, Alexandria, Virginia, United States">
                                                    <i class="fa fa-question-circle"></i> </span>
                                            </div>
                                        </div>
                                        <div class="sf-rating-averages-cell">
                                            <div class="sf-reviews-row">
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <div class="sf-reviews-star-no">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sf-rating-averages-table">
                                        <div class="sf-rating-averages-cell"> <span class="sf-completed-tasks">1081
                                                completed tasks</span></div>
                                        <div class="sf-rating-averages-cell">
                                            <div class="sf-reviews-row">
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i></div>
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
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <div class="sf-reviews-star-no">4.7</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sf-rating-categories-table">
                                        <div class="sf-rating-categories-cell">Cost</div>
                                        <div class="sf-rating-categories-cell">
                                            <div class="sf-reviews-row">
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i></div>
                                                <div class="sf-reviews-star-no">3.8</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sf-rating-categories-table">
                                        <div class="sf-rating-categories-cell">Response Time</div>
                                        <div class="sf-rating-categories-cell">
                                            <div class="sf-reviews-row">
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <div class="sf-reviews-star-no">2.6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sf-rating-categories-table">
                                        <div class="sf-rating-categories-cell">Timeline</div>
                                        <div class="sf-rating-categories-cell">
                                            <div class="sf-reviews-row">
                                                <div class="sf-reviews-star"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i></div>
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
                                            <div class="sf-review-pic"><img src="images/pro-pic/pic1.jpg"
                                                    alt="#"></div>
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
                                            <span class="sf-review-write">Good service ipsum dolor sit amet,
                                                consectetur adipiscing elit vitae is vitae sapien.</span>
                                            <span class="sf-review-red-less">Read More</span>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sf-review-box sf-shadow-box">
                                        <div class="sf-review-head clearfix">
                                            <div class="sf-review-pic"><img src="images/pro-pic/pic2.jpg"
                                                    alt="#"></div>
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
                                            <span class="sf-review-write">Good service ipsum dolor sit amet,
                                                consectetur adipiscing elit vitae is vitae sapien.</span>
                                            <span class="sf-review-red-less">Read More</span>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div> --}}


                    </div>
                    <!-- Left part END -->


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

        <!-- Modal -->

        <div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateStatusModalLabel">Update Status</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="my-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control" style="border: 1px solid lightgray !important">
                                    <option value="approved">Approve</option>
                                    <option value="total-amount-paid">Total Amount Paid</option>
                                    <option value="rejected">Reject</option>
                                </select>
                            </div>
                            <div class="mb-3" id="message-container">
                                <label for="message">Message</label>
                                <textarea name="message" id="" cols="30" rows="10"  class="form-control" style="min-height: 100px;border: 1px solid lightgray !important"></textarea>

                            </div>

                            <!-- Radio buttons container initially hidden -->
                            <div class="mb-3" id="radio-buttons-container" style="display: none;">
                                <label>Select Reason for Rejection</label>
                                <div>
                                    <label><input type="radio" name="message" value="No communication"> No communication</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="message" value="Expensive/Higher quotation"> Expensive/Higher quotation</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="message" value="Unprofessionalism"> Unprofessionalism</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="message" value="Got better deal elsewhere"> Got better deal elsewhere</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="message" value=" Not interested"> Not interested</label>
                                </div>
                                <div>
                                    <label><input type="radio" name="message" value="Changed my plan"> Changed my plan</label>
                                </div>
                            </div>


                            

                            <div class="mb-4">
                                <button class="btn btn-dark" type="submit">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    

    @include('loginmodel')


    <!-- Modal -->
    <div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProfileModalLabel">Update Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-4 px-2">
                    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group mb-4">
                            <label for="name">Profile Picture</label>

                            @if (auth()->user()->user_img !=  null)
                                <div class="mb-3">

                                    <img src="{{asset('images/user/'.auth()->user()->user_img)}}" alt=""  style="width:90px;">
                                </div>
                            @else
                                <div class="mb-3">
                                    <img src="{{asset('images/profile-user.png')}}" style="width920px;height:90px" alt="">
                                
                                </div>
                            @endif

                            <input type="file" class="form-control" name="user_img">
                            

                        </div>

                        <div class="form-group mb-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="" value="{{auth()->user()->name}}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" disabled ="" value="{{auth()->user()->email}}">
                        </div>

                        <div class="form-group mb-4">
                            <label for="mobile">Phone</label>
                            <input type="text" class="form-control" name="mobile" id="" value="{{auth()->user()->mobile}}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="gender">Gender</label>
                            
                            <select name="gender" id="" class="form-control">
                                <option value="Male" {{auth()->user()->gender == 'Male' ? 'selected' : ''}} >Male</option>
                                <option value="female" {{auth()->user()->gender == 'female' ? 'selected' : ''}}>Female</option>
                            </select>
                            
                        </div>



                        <div class="form-group text-right">
                            <button class="btn btn-dark" type="submit">Update Profile</button>
                        </div>
                        

                    </form>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}
            </div>
        </div>
    </div>
    

    


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

    <script type="text/javascript">
        // document.addEventListener('DOMContentLoaded', function() {
        //     var statusModal = document.getElementById('updateStatusModal');

        //     statusModal.addEventListener('show.bs.modal', function (event) {
        //         // Button that triggered the modal
        //         var button = event.relatedTarget;
        //         // Extract info from data-bs-* attributes
        //         var id = button.getAttribute('data-id');

        //         console.log(id);
                

        //         // Update the modal's content.
        //         // var modalTitle = editModal.querySelector('.modal-title');
        //         var modalForm = editModal.querySelector('.modal-body form');
        //         modalForm.action = '/lead-status-update/' + id + '/update';
        //         // var modalBodyInput = editModal.querySelector('.modal-body input[name="title"]');

        //         // // AJAX request to fetch option details
        //         // fetch(`/admin/option/${id}`)
        //         //     .then(response => response.json())
        //         //     .then(data => {
        //         //         modalTitle.textContent = 'Update Option ID: ' + id;
        //         //         modalBodyInput.value = data.title;
        //         //         modalForm.action = `/admin/option/${id}/update`;
        //         //     })
        //         //     .catch(error => console.error('Error fetching option details:', error));
        //     });
        // });

        $('#updateStatusModal').on('show.bs.modal', function (event) {
            console.log('Hello Worl');
        
            var statusModal = document.getElementById('updateStatusModal');


            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
           
            var modalForm = statusModal.querySelector('.modal-body form');
            modalForm.action = '/lead-status-update/' + id + '/update';


            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            // var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + recipient)
            // modal.find('.modal-body input').val(recipient)

            console.log('hello');
            
        })



        $(document).ready(function() {
            $('#status').change(function() {
                var selectedStatus = $(this).val();
                if (selectedStatus === 'rejected') {
                    $('#message-container').hide();
                    $('#radio-buttons-container').show();
                } else {
                    $('#radio-buttons-container').hide();
                    $('#message-container').show();
                }
            });
        });
    </script>
    

</body>
</html>
