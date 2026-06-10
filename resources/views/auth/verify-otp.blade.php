<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>Verifikasi OTP - WorkHub</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-white">

    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">

            <div class="section">
                <img src="{{ asset('assets/img/sample/photo/vector4.png') }}"
                    alt="image"
                    class="form-image">
            </div>

            <div class="section mt-1 mb-5">

                <h1>Verifikasi OTP</h1>

                <h4>
                    Masukkan kode OTP yang telah dikirim ke email Anda
                </h4>

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form method="POST"
                    action="{{ route('otp.verify') }}">

                    @csrf

                    <div class="form-group boxed">
                        <div class="input-wrapper">

                            <i class="bi bi-shield-lock input-icon"></i>

                            <input type="text"
                                class="form-control custom-input"
                                name="otp"
                                placeholder="Masukkan OTP"
                                required>

                        </div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit"
                            class="btn btn-danger btn-block btn-lg">
                            Verifikasi OTP
                        </button>
                    </div>

                </form>

                <div class="text-center mt-4 mb-3">

                    <small class="text-muted d-block">
                        Powered By
                    </small>

                    <strong style="font-size:13px;">
                        PT. Boveri Indonesia × CV Usaha Karya Bersama
                    </strong>

                    <small class="text-muted d-block">
                        © 2026
                    </small>

                </div>

            </div>

        </div>

    </div>

    <script src="{{ asset('assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/base.js') }}"></script>

</body>

</html>