<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
    <style></style>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .bg-image {
            width: 100vw;
            height: 100hv;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            filter: brightness(0.6);
        }


        .offcanvas {
            background-color: #03213B;
            /* Atur latar belakang dark offcanvas dengan warna yang sama */
            color: white;
            /* Atur warna teks offcanvas menjadi putih */
        }

        .offcanvas.navbar-scrolled {
            background-color: #03213B;
            /* Pastikan latar belakang tetap sama ketika navbar di-scroll */
        }


        .navbar {
            background-color: transparent;
            transition: background-color 0.5s;
        }

        .navbar.navbar-scrolled {
            background-color: #03213B;
        }

        .navbar.navbar-scrolled .navbar-text {
            color: white;
            /* Warna teks diubah menjadi putih saat navbar berubah warna */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top" id="custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-auto" href="#" style="font-family:Marcellus SC; font-size:50px;">Cinema
                Atma</a>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel" style="background-color:#03213B;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('loginAdmin') }}">Admin Page</a>
                </li>
            </ul>
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    </div>
    </nav>


    <div class="content-wrapper">
        @yield('content')
    </div>

    {{-- <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: #03213B; color:white; font-family:Marcellus SC;">
            Kelompok 11 © 2023 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer> --}}


    <script>
        const navEl = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navEl.classList.add('navbar-scrolled');
            } else {
                navEl.classList.remove('navbar-scrolled');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/seatBioskop.js') }}"></script>
    <script src="{{ asset('js/transaksi1.js') }}"></script>
</body>

</html>
