<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | {{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Polda Riau Satu Data: SDM dan Perencanaan" name="description" />
    <meta content="Pizaini and team" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!-- App css -->
    <link href="{{ asset('adminto/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminto/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminto/admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
</head>


<body class="authentication-bg">
    <div class="home-btn d-none d-sm-block">
        <a href="{{ route('home') }}" title="Home"><i class="fas fa-home h2 text-dark"></i></a>
    </div>
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <a class="nav-link" href="{{ route('auth.login.form') }}">
                            <span><img src="{{asset('adminto/admin/images/logo-dark.png') }}" alt="Logo" height="54"></span>
                        </a>
                        Polda Riau Satu Data: Integrasi SDM dan Perencanaan
                    </div>
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Sign In</h4>
                            </div>
                            @if ($errors->has('email') || $errors->has('password'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ $errors->first('email') }} {{ $errors->first('password') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('auth.login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="emailaddress">{{ __('E-Mail') }}</label>
                                    <input class="form-control" id="email" type="email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input class="form-control"id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input  class="custom-control-input" type="checkbox" name="remember"  id="remember" checked id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                </div>

                            </form>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    @if (Route::has('password.request'))
                                        <a  href="{{ route('password.request') }}" class="text-muted ml-1"><i class="ti-key mr-1"></i>{{ __('Lupa password?') }}</a>
                                        @if (Route::has('register'))
                                            | <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    @endif
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <!-- Vendor js -->
    <script src="{{asset('adminto/admin/js/vendor.min.js')}}"></script>
    {{--    <!-- App js -->--}}
    <script src="{{asset('adminto/admin/js/app.min.js')}}"></script>
    </body>
</html>
