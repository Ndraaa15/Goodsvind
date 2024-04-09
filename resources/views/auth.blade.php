<!DOCTYPE html>
<html lang="en">
<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Molla - Bootstrap eCommerce Template" />
    <meta name="author" content="p-themes" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/icons/site.html') }}" />
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}" color="#666666" />
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico') }}" />
    <meta name="apple-mobile-web-app-title" content="Molla" />
    <meta name="application-name" content="Molla" />
    <meta name="msapplication-TileColor" content="#cc9966" />
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="page-wrapper">
        <main class="main">
            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="
                        background-image: url('assets/images/backgrounds/login-bg.jpg'); background-size: cover; background-position: center; min-height: 100vh;">
                <div class="container">
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="false">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                                    <form action="{{ url('/auth/signin') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="singin-email-2">Email address
                                                *</label>
                                            <input type="text" class="form-control" id="singin-email-2" name="signin-email" required />
                                        </div>
                                        <!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="singin-password-2">Password *</label>
                                            <input type="password" class="form-control" id="singin-password-2" name="signin-password" required />
                                        </div>
                                        <!-- End .form-group -->
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember-2" />
                                                <label class="custom-control-label" for="signin-remember-2">Remember Me</label>
                                            </div>
                                            <!-- End .custom-checkbox -->
                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div>
                                        <!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">
                                            or sign in with
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .form-choice -->
                                </div>
                                <!-- .End .tab-pane -->
                                <!-- Register -->
                                <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                                    <form action="{{ url('/auth/register') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="register-email-2">Name *</label>
                                            <input type="text" class="form-control" id="register-email-2" name="register-name" required />
                                        </div>
                                        <!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email-2">Email address *</label>
                                            <input type="email" class="form-control" id="register-email-2" name="register-email" required />
                                        </div>
                                        <!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password-2">Password *</label>
                                            <input type="password" class="form-control" id="register-password-2" name="register-password" required />
                                        </div>
                                        <!-- End .form-group -->
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required />
                                                <label class="custom-control-label" for="register-policy-2">I agree to the
                                                    <a href="#">privacy policy</a>
                                                    *</label>
                                            </div>
                                            <!-- End .custom-checkbox -->
                                        </div>
                                        <!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">
                                            or sign in with
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div>
                                            <!-- End .col-6 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .form-choice -->
                                </div>
                                <!-- .End .tab-pane -->
                            </div>
                            <!-- End .tab-content -->
                        </div>
                        <!-- End .form-tab -->
                    </div>
                    <!-- End .form-box -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .login-page section-bg -->
        </main>
        <!-- End .main -->
    </div>
    <!-- End .page-wrapper -->


    <!-- Plugins JS File -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->

</html>
