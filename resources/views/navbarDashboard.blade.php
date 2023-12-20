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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        body {
            margin: 0;
            font-family: 'Marcellus SC', serif;
            background-color: #f8f9fa;
            /* Change to your preferred background color */
        }

        .navbar {
            background-color: transparent;
            transition: background-color 0.5s;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            /* Add a subtle shadow */
        }

        .navbar-brand {
            font-size: 40px;
            color: #03213B;
            /* Update brand color */
        }

        .navbar-toggler {
            border: none;
            outline: none;
            padding: 5px;
            color: #03213B;
            /* Update toggle button color */
        }

        .navbar-toggler:hover {
            color: #216869;
            /* Change toggle button color on hover */
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            color: #03213B;
            transition: color 0.3s;
            text-align: center;
            /* Teks diatur ke tengah */
            display: block;
            /* Memastikan teks memenuhi lebar penuh */
            padding: 10px 0;
        }

        .navbar-nav .nav-link:hover {
            color: #216869;
            /* Change link color on hover */
        }

        .offcanvas-header {
            border-bottom: 1px solid #03213B;
            /* Update offcanvas header border */
        }

        .offcanvas-title {
            color: #03213B;
            /* Update offcanvas title color */
        }

        .offcanvas-body .nav-link {
            color: #fff;
            /* Update offcanvas link color */
            font-size: 20px;
            transition: color 0.3s;
        }

        .offcanvas-body .nav-link:hover {
            color: #c1dce8;
            /* Change offcanvas link color on hover */
        }

        .navbar-nav .nav-item {
            display: inline-block;
            /* Mengatur lebar sesuai teks */

            /* Ubah warna garis sesuai preferensi Anda */
            margin-bottom: 10px;
            /* Beri jarak antara garis dan teks */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark sticky-top" id="custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-auto" href="#" style="font-family:Marcellus SC; font-size:50px;">CINEMA
                ATMA</a>

        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="font-size: 25px">Your Page</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="background-color: #03213B;">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('Costumer.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('CostumerProfile.index') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Costumer.show', auth()->id()) }}">My
                        Ticket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" style="color: rgb(234, 156, 156)">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>


    <div class="content-wrapper">
        @yield('content')
    </div>


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
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="{{ asset('js/seatBioskop.js') }}"></script>
    <script src="{{ asset('js/transaksi1.js') }}"></script>
</body>

</html>
