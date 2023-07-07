<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Census Portal/Login </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('scss/style.css')}}" rel="stylesheet">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(80% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 80%;
            }
        }
    </style>
</head>

<body>

<main>
    <div class="container">

        <section class="section register mt-5  d-flex flex-column align-items-center justify-content-center py-4">
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">--}}
{{--                        <div class="card mb-3">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex justify-content-center py-4">--}}
{{--                                    <img src="{{asset('img/logo/census_logo.jpg')}}" alt="" class="logo d-flex align-items-center w-auto rounded-circle">--}}
{{--                                    --}}{{--                                <span class="d-none d-lg-block">DCO,Assam</span>--}}
{{--                                </div><!-- End Logo -->--}}
{{--                                <div class="pt-4 pb-2">--}}
{{--                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>--}}
{{--                                    <p class="text-center small">Enter your username & password to login</p>--}}
{{--                                </div>--}}

{{--                                @if ($errors->any())--}}
{{--                                    {{ implode('', $errors->all(':message')) }}--}}
{{--                                @endif--}}


{{--                                <form class="row g-3 needs-validation" action="{{url('login')}}" method="post">--}}
{{--                                    @csrf--}}

{{--                                    <div class="col-12">--}}
{{--                                        <label for="yourUsername" class="form-label">Username</label>--}}
{{--                                        <div class="input-group has-validation">--}}
{{--                                            <span class="input-group-text" id="inputGroupPrepend">@</span>--}}
{{--                                            <input type="text" name="email" class="form-control" id="yourUsername" required>--}}
{{--                                            <div class="invalid-feedback">Please enter your username.</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-12">--}}
{{--                                        <label for="yourPassword" class="form-label">Password</label>--}}
{{--                                        <input type="password" name="password" class="form-control" id="yourPassword" required>--}}
{{--                                        <div class="invalid-feedback">Please enter your password!</div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">--}}
{{--                                            <label class="form-check-label" for="rememberMe">Remember me</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <button class="btn btn-primary w-100" type="submit">Login</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>--}}
{{--                                    </div>--}}
{{--                                </form>--}}

{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="vh-90 card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="container-fluid h-custom card-body ">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                 class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                            <form action="{{url('login')}}" method="post">
                                @csrf
                                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                    <div class="d-flex justify-content-center py-4">
                                       <img src="{{asset('img/logo/census_logo.jpg')}}" alt="" class="logo d-flex align-items-center rounded-circle" style="width: 100px">

                                       </div>
                                    <p class="lead fw-normal mb-0 me-3">&nbsp Sign in | Census Portal </p>
                                        {{--                                    <button type="button" class="btn btn-primary btn-floating mx-1">--}}
{{--                                        <i class="fab fa-facebook-f"></i>--}}
{{--                                    </button>--}}

{{--                                    <button type="button" class="btn btn-primary btn-floating mx-1">--}}
{{--                                        <i class="fab fa-twitter"></i>--}}
{{--                                    </button>--}}

{{--                                    <button type="button" class="btn btn-primary btn-floating mx-1">--}}
{{--                                        <i class="fab fa-linkedin-in"></i>--}}
{{--                                    </button>--}}
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                 <p class="text-center fw-bold mx-3 mb-0">Admin Login</p>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                           placeholder="Enter a valid email address" />

                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                                           placeholder="Enter password" />

                                </div>

{{--                                <div class="d-flex justify-content-between align-items-center">--}}
{{--                                    <!-- Checkbox -->--}}
{{--                                    <div class="form-check mb-0">--}}
{{--                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />--}}
{{--                                        <label class="form-check-label" for="form2Example3">--}}
{{--                                            Remember me--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                    <a href="#!" class="text-body">Forgot password?</a>--}}
{{--                                </div>--}}

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
{{--                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"--}}
{{--                                                                                                      class="link-danger">Register</a></p>--}}
                                </div>

                            </form>
                            <div class="mt-1">
                                @if(count($errors) > 0)
                                    @foreach( $errors->all() as $message )
                                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <span>{{ $message }}</span>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-sm-row text-center text-md-start justify-content-between py-4 mt-5 px-4 px-xl-5 bg-primary">
                    <!-- Copyright -->
                    <div class="text-white py-4">
                        Copyright © DCO,Assam 2023. All rights reserved.
                    </div>
                    <!-- Copyright -->
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->



<!-- Vendor JS Files -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
    <!-- Session Status -->
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ml-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}

