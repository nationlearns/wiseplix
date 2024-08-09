<header class="site-header header-style-2 mobile-sider-drawer-menu header-full-width">
    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">

            <div class="container clearfix">
                <!--Logo section start-->
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{url('/')}}">
                            <img src="{{asset('images/logo/wiseplix-logo.png')}}" width="120" alt="">
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
                            <a href="javascript:;">Category</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('category')}}">All Category</a></li>
                            </ul>
                        </li>

                        <li class="has-child"><a href="{{url('blogs')}}">Blog</a>
                        </li>

                        <li class="has-child"><a href="{{url('about-us')}}">About Us</a>
                        </li>
                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                        <li><a href="">Business professional</a></li>
                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                        @if (Auth::check())
                        <!--Login-->
                            <a href="{{route('user.logout')}}" class="site-button aon-btn-signup m-l20">
                                <i class="feather-power"></i>Logout
                            </a>
                        <!--Sign up-->
                        <a href="{{route('profile')}}" class="site-button aon-btn-signup m-l20">
                            <i class="fa fa-user"></i>Profile
                        </a>
                        @else
                        <!-- If user is not logged in, show login button -->
                        <a href="{{route('login')}}" class="site-button aon-btn-signup m-l20">
                            <i class="fa fa-user"></i>Login
                        </a>
                    @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
</header>
