{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}">

    <title>Register</title>
</head>

<body>



    <div class="content py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <a href="https://wiseplix.com/" class="text-center">
                            <img src="{{asset('images/logo/wiseplix-logo.png')}}" alt="WisePlix" width="200px" class="mb-4">
                          </a>
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3>Sign Up to <strong>WisePlix</strong></h3>

                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="username">Name</label>
                                        <input class="form-control" type="text" name="name">
                                        @if ($errors->has('name'))
                                            <span class="invalid feedback text-danger mt-2" role="alert">
                                                <strong>{{ $errors->first('name') }}.</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group first">
                                        <label for="username">Phone Number</label>
                                        <input class="form-control" type="tel" pattern="\d{10}" maxlength="10" name="mobile">
                                        @if ($errors->has('mobile'))
                                            <span class="invalid feedback text-danger mt-2" role="alert">
                                                <strong>{{ $errors->first('mobile') }}.</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group first">
                                        <label for="username">Email Address</label>
                                        <input class="form-control" type="email" name="email">
                                        @if ($errors->has('name'))
                                            <span class="invalid feedback text-danger mt-2" role="alert">
                                                <strong>{{ $errors->first('name') }}.</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="invalid feedback text-danger mt-2" role="alert">
                                                <strong>{{ $errors->first('password') }}.</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" class="form-control" id="password" name="password_confirmation">
                                        @if ($errors->has('password'))
                                            <span class="invalid feedback text-danger mt-2" role="alert">
                                                <strong>{{ $errors->first('password') }}.</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="d-flex mb-5 align-items-center">
                                        <label class="control control--checkbox mb-0"><span class="caption">I've read and agree with your Privacy Policy and Terms & Conditions</span>
                                            <input type="checkbox" checked="checked" name="remember" />
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>

                                    <input type="submit" value="Register"
                                        class="btn btn-pill text-white btn-block btn-primary">
                                </form>
                                <div class="d-flex mt-5 align-items-center">
                                    <span class="caption">Already have an account?</span>
                                    <span class="ml-auto"><a href="{{ route('login') }}"
                                            class="forgot-pass">Sign Here</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('login/js/popper.min.js') }}"></script>
    <script src="{{ asset('login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login/js/main.js') }}"></script>
</body>

</html>
