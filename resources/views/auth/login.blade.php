<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Presensi App Boveri - UKB</title>
    <meta name="description" content="Presensi App Boveri - UKB">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/icon/192x192.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="manifest" href="{{asset('assets/manifest.json')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="{{asset('assets/img/sample/photo/vector4.png')}}" alt="image" class="form-image">
            </div>
            <div class="section mt-1 mb-5">
                <div class="section mt-1">
                    <h1>Get started</h1>
                    <h4>Fill the form to log in jjskskjkjsksjksjksjkjksj</h4>
                </div>
                <form action="{{asset('app-pages.html')}}">
                    <div class="form-group boxed">
                        <div class="input-wrapper">

                            <i class="bi bi-envelope input-icon"></i>

                            <input type="email"
                                class="form-control custom-input"
                                id="email1"
                                placeholder="Email address">

                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">

                            <i class="bi bi-lock input-icon"></i>

                            <input type="password"
                                class="form-control custom-input"
                                id="password1"
                                placeholder="Password">

                            <i class="bi bi-eye-slash password-toggle"
                                id="togglePassword"></i>

                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <a href="page-register.html">Register Now</a>
                        <a href="page-forgot-password.html" class="text-muted">Forgot Password?</a>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-danger btn-block btn-lg">Log in</button>
                    </div>

                </form>
                <div class="text-center mt-4 mb-3"> <small class="text-muted d-block"> Powered By </small> <strong style="font-size:13px;"> PT. Boveri Indonesia × CV Usaha Karya Bersama </strong> <small class="text-muted d-block"> @copyright 2026 </small></div>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{asset('assets/js/lib/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap-->
    <script src="{{asset('assets/js/lib/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js')}}"></script>
    <!-- Base Js File -->
    <script src="{{asset('assets/js/base.js')}}"></script>

</body>

</html>