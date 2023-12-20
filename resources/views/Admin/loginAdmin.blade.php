<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="antialiased">
    <style>
        body {
            background-color: #04192E;
            color: white;
            font-family: Marcellus SC;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <b>waduh!</b> {{ session('error') }}
                        </div>
                    @endif
                    <form method="post" class="form" action="{{ route('actionLogin') }}">
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Admin Login</p>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="text-center text-lg-center mt-4 pt-2">
                            <button type="submit" class="btn btn-custom btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#CEA945;"
                                onclick="validateForm()">Login</button>
                            <a href=" {{ url('login') }}" class="btn btn-danger btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Back</a>
                        </div>
                        <p class="text-center">Belum Punya akun? <a href="{{ route('registerAdmin') }}">Register
                                sini</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-custom"
            style="background-color:#03213B;">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright Kelompok 11 © 2023. All rights reserved.
            </div>
            <!-- Copyright -->


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
