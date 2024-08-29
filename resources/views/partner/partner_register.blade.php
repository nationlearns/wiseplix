<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Partner | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logowise.jpeg') }}" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-2">
                        <div class="">
                            <a href="{{url('/')}}" class="auth-logo">
                                <img src="{{ asset('frontend/assets/images/logowise.jpeg') }}" height="50" class="logo-dark mx-auto" alt="">
                                <img src="{{ asset('frontend/assets/images/logowise.jpeg') }}" height="30" class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p-3">
                        <form class="form-horizontal mt-2" action="{{route('store.partner.register')}}" method="post">
                            @csrf
                            <div class="form-group mb-2 row">
                                <div class="col-12">
                                    <label for="">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <div class="col-12">
                                    <label for="">Email Address</label>
                                    <input class="form-control" type="email" name="email" required="" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <div class="col-12">
                                    <label for="">Phone Number</label>
                                    <input class="form-control" type="mobile" required="" name="mobile" placeholder="Enter your Phone Number">
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <div class="col-12">
                                    <label for="">Password</label>
                                    <input class="form-control" type="password" required="" name="password" placeholder="Enter your Password">
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <div class="col-12">
                                    <label for=""> Confirm Password</label>
                                    <input class="form-control" type="password" required="" name="password_confirmation" placeholder="Enter your Confirm Password">
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-0 row">
                                <div class="col-12 mt-3 text-center">
                                    <a href="{{route('partner.login')}}" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{ asset('backend/assets/js/app.js')}}"></script>

</body>

</html>