<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/categories-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:53:52 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('frontend/assets/images/favicon.html')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logowise.jpeg') }}" />
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">
    
    <!-- PAGE TITLE HERE -->
    <title>Service Finder Template | Categories Detail</title>
    
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
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/category-modal.css')}}">


        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-21XRZX7MFP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-21XRZX7MFP');
</script>

    <style>
    
    span.selection{
        position: relative;
        top: -1px;
    }
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid black;
            border-radius: 0;
            min-height: 49px
        }
        .select2-container--default .select2-selection--single .select2-selection__placeholder{
            color: #000;
            margin-top: 9px;
            display: block;
        }
        .select2-selection__arrow{
            display: none
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
	<div class="page-wraper">        <!-- HEADER START -->
     @include('header')
        <!-- HEADER END -->
    
        <!-- Content -->
        <div class="page-content">
        <input type="hidden" id="category_id" value="{{$slug->id}}" name="category_id">

            <div class="section-content sf-allCaty-info-wrap">
                <div class="container">
                    <!--Category Detail Section Start-->
                    <div class="row">
                        <!--Category Detail Left-->
                        <div class="col-md-6">
                            <div class="sf-caty-pic" style="background-image: url('https://wiseplix-prod.s3.ap-south-1.amazonaws.com/Images/category_image/{{ $slug->upload_category_image }}');" alt="{{ $slug->alt_name}}">
                            </div>
                        </div>
                        <!--Category Detail Right-->
                        <div class="col-md-6">
                            <div class="sf-caty-info">
                                <h3>{{ str_replace('-', ' ', $slug->slug) }}</h3>
                                <div class="sf-caty-text">
                                    <p>{{$slug->description}}.</p>
                                </div>
                            </div>

                            <div class="widget  widget_tag_cloud rounded-sidebar-widget">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title text-success">Sub Categories</h3>
                                    
                                </div>  
                                                                  
                                <div class="tagcloud">
                                    @foreach ($data as $item)
                                    <a href="javascript:void(0);">{{ ucwords($item->slug) }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Category Detail Section End-->
                </div>
            </div>
            
            <div class="section-content sf-caty-listResult-wrap">
                <div class="container">

                    <div class="section-content">
                        <h3 class="text-info my-3">Profile Listing</h3>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="div">

                                    <form action="{{ route('category.profile-listing', $category->slug) }}" method="GET">
                                        @csrf
                                        <select id="location-select" name="location_id">
                                            <option value="">Select Location</option>
                                        </select>

                                        <!-- Subcategory Filter -->
                                        <select name="subcategory_id">
                                            <option value="">Select Subcategory</option>
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}" {{ old('subcategory_id', request('subcategory_id')) == $subcategory->id ? 'selected' : '' }}>
                                                    {{ $subcategory->slug }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <!-- Reviews Filter -->
                                        <select name="min_rating">
                                            <option value="">Min Rating</option>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i }}" {{ old('min_rating', request('min_rating')) == $i ? 'selected' : '' }}>
                                                    {{ $i }}
                                                </option>
                                            @endfor
                                        </select>

                                        <button type="submit" class="btn btn-info btn-lg">Filter</button>

                                    </form>

                                </div>
                            </div>

                            <!--BLock 1-->
                            @if ($count > 0)
                                @foreach ($profile as $item)

                                    <div class="col-md-9 my-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 my-1">
                                                        
                                                        <figure class="mb-0" 
                                                            style="
                                                            padding-top: 100%;  /* 450px/800px = 0.5625 */
                                                            background-image: url({{ asset($item->profile_image) }});
                                                            background-size: cover;
                                                            -moz-background-size: cover;  /* Firefox 3.6 */
                                                            background-position: center;  /* Internet Explorer 7/8 */
                                                            border-radius: 8px;
                                                            ">
                                                        </figure>

                                                        {{-- <img src="{{asset('frontend/assets/images/categories/pic1.jpg')}}" class="mw-100" alt=""> --}}
                                                    </div>
                                                    <div class="col-md-9 my-1">
                                                        <h3>{{$item->full_name}}</h3>
                                                        <p> {{$item->about_company}}</p>

                                                        <div class="d-flex gap-4 flex-wrap" style="gap: .5rem">
                                                            @foreach ($item->subcategories as $subcategory)
                                                                <span class="badge bg-info text-white">{{ $subcategory['slug'] }}</span>
                                                            @endforeach
                                                        </div>

                                                        <p class="mt-2"><img src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/results_locat_icon.svg" alt="" width="16px" style="position: relative;top:-1.25px"> {{$item->area_of_service}}</p>
                                                        
                                                        @if ($item->getAverageRatingAttribute() > 0)
                                                            
                                                            <div class="mb-4">
                                                                
                                                                @for ($i = 0; $i < round($item->getAverageRatingAttribute()); $i++)
                                                                    <img src="{{asset('images/star.png')}}" width="18" alt="">
                                                                @endfor

                                                            </div>

                                                        @endif

                                                        {{-- {{$item->getAverageRatingAttribute()}} --}}


                                                        <a href="{{route('associate.profile',$item->id)}}" class="btn btn-dark">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    
                                @endforeach
                            @else
                                <h4 class="text-danger m-4">No Profile Found</h4>
                            @endif
                            <!--Pagination Start-->
                            <div class="site-pagination s-p-center">
                                  {{-- <ul class="pagination">
                                    <li class="page-item disabled">
                                      <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-ellipsis-h"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">11</a></li>
                                    <li class="page-item">
                                      <a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>
                                    </li>
                                  </ul> --}}
                            </div>  
                            <!--Pagination End-->

                        </div>
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
    
    @include('categorymodal')
    
    
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{asset('frontend/assets/js/category.js')}}"></script>

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


<script>

    $(document).ready(function() {

        var csrfToken = $('meta[name="csrf-token"]').attr('content');
            
        $('#location-select').select2({
            placeholder: 'Select Location',
            ajax: {
                url: '/api/get-all-location', // Your API endpoint
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request header
                },
                data: function(params) {
            return {
                query: params.term // Send the search query
            };
        },
        processResults: function(data) {
            // Return the formatted results
            return {
                results: data
            };
        },
        cache: true
            }
        });


    });

</script>

</body>


<!-- Mirrored from aonetheme.com/sf-html-demo/categories-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 08:53:54 GMT -->
</html>
