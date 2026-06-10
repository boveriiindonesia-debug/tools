<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <title>Forgot Password - WorkHub</title>

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

            <h1>Forgot Password</h1>

            <h4>
                Masukkan email yang terdaftar untuk menerima OTP
            </h4>

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <form method="POST"
                action="{{ route('forgot.password.send') }}">

                @csrf

                <div class="form-group boxed">
                    <div class="input-wrapper">

                        <i class="bi bi-envelope input-icon"></i>

                        <input type="email"
                            class="form-control custom-input"
                            name="email"
                            placeholder="Email"
                            required>

                    </div>
                </div>

                <div class="form-button-group">
                    <button type="submit"
                        class="btn btn-danger btn-block btn-lg">

                        Kirim OTP

                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>