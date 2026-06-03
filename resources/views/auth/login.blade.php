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

    <style>
    html,
    body {
        margin: 0;
        padding: 0;
        min-height: 100%;
        background: #dfe3e8;
    }

    /* MOBILE FRAME */
    #appCapsule {
        width: 100%;
        max-width: 430px;
        min-height: 100vh;
        margin: 0 auto;
        background: #fff;
        position: relative;
        overflow-x: hidden;
        overflow-y: auto;
        box-shadow: 0 0 30px rgba(0, 0, 0, .15);
    }

    /* DESKTOP */
    @media (min-width:768px) {
        body {
            padding: 20px 0;
        }

        #appCapsule {
            height: 850px;
            min-height: 850px;
            border: 10px solid #111827;
            border-radius: 35px;
            overflow-y: auto;
        }

        #appCapsule::before {
            content: "";
            width: 120px;
            height: 24px;
            background: #111827;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            z-index: 999;
        }
    }

    .login-form {
        min-height: 100%;
        padding: 30px 25px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-image {
        width: 100%;
        max-width: 280px;
        display: block;
        margin: 0 auto 25px;
    }

    .section h1 {
        text-align: center;
        font-size: 32px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 10px;
    }

    .section h4 {
        text-align: center;
        color: #64748b;
        margin-bottom: 30px;
    }

    .form-group.boxed {
        margin-bottom: 18px;
    }

    .form-control {
        height: 55px;
        border-radius: 14px;
        border: 1px solid #dbeafe;
        background: #f8fafc;
        padding-left: 18px;
    }

    .form-control:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, .15);
    }

    .clear-input {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
    }

    .form-links {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
    }

    .btn-primary {
        height: 55px;
        border-radius: 14px;
        border: none;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        font-weight: 600;
        box-shadow: 0 10px 25px rgba(37, 99, 235, .35);
    }

    .form-button-group {
        margin-top: 25px;
    }

    @media (max-width:768px) {
        .login-form {
            padding: 25px 20px;
        }

        .section h1 {
            font-size: 26px;
        }

        .form-control,
        .btn-primary {
            height: 50px;
        }
    }

    html::-webkit-scrollbar,
    body::-webkit-scrollbar,
    #appCapsule::-webkit-scrollbar {
        display: none;
    }

    /* PERBAIKAN LOGIN BUTTON */
.form-button-group {
    width: 100%;
    padding: 0;
    margin-top: 25px;
}

.form-button-group .btn {
    width: 100%;
    display: block;
}

/* Pastikan isi login berada dalam frame */
.login-form {
    box-sizing: border-box;
    width: 100%;
}

/* Khusus desktop */
@media (min-width:768px) {

    .section,
    .login-form,
    form {
        width: 100%;
    }

    .form-button-group {
        position: relative !important;
        left: auto !important;
        right: auto !important;
        bottom: auto !important;
    }
}

</style>
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
            <div class="section mt-1">
                <h1>Get started</h1>
                <h4>Fill the form to log in</h4>
            </div>
            <div class="section mt-1 mb-5">
                <form action="{{asset('app-pages.html')}}">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="email" class="form-control" id="email1" placeholder="Email address">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password1" placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            <a href="page-register.html">Register Now</a>
                        </div>
                        <div><a href="page-forgot-password.html" class="text-muted">Forgot Password?</a></div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </div>

                </form>
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
    <!-- Ionicons -->
    <script type="module" src="{{asset('assets/js/ionicons/ionicons.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js')}}"></script>
    <!-- Base Js File -->
    <script src="{{asset('assets/js/base.js')}}"></script>


</body>

</html>