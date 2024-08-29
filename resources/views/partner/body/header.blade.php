<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('partner.dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="https://wiseplix.com/backend/assets/images/logoweise.jpeg" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="https://wiseplix.com/backend/assets/images/logoweise.jpeg" alt="logo-dark" height="20">
                    </span>
                </a>

                <a href="{{ route('partner.dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="https://wiseplix.com/backend/assets/images/logoweise.jpeg" alt="logo-sm-light" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="https://wiseplix.com/backend/assets/images/logoweise.jpeg" alt="logo-light" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
        </div>

        <div class="d-flex">

            @php
                $id = Auth::user()->id;
                $adminData = App\Models\User::find($id);
            @endphp
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ !empty($adminData->user_img) ? url('images/user/' . $adminData->user_img) : url('upload/no_image.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('partner.profile') }}"><i
                            class="ri-user-line align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('partner.change.password') }}">
                        <i class="ri-lock-line align-middle me-1"></i> Change Password</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('partner.logout') }}"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
