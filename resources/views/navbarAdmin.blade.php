<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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

        .navbar.navbar-scrolled {
            background-color: #03213B;
        }

        /* Mengatur warna latar belakang dan bayangan dropdown saat navbar di-scroll */
        .navbar.navbar-scrolled .navbar-text,
        .navbar.navbar-scrolled .dropdown-menu {
            background-color: #03213B;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);

        }


        .navbar.navbar-scrolled .dropdown-item {
            color: white;
        }


        .navbar.navbar-scrolled .form-control {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top" id="custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="btn-group">
                <button id="dropdown-button" type="button" class="btn" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="background-color: transparent; color: white;">
                    <img src="{{asset('img/avatar2.png')}}" alt="Avatar" class="rounded-circle" style="width: 32px; height: 32px;"> Admin <i class="fas fa-caret-down"></i>
                </button>

                <ul class=" dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="{{url('login')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('admin')}}">Admin Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
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
    <script>
        const navEl = document.querySelector('.navbar');
        const dropdownButton = document.getElementById('dropdown-button');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navEl.classList.add('navbar-scrolled');
                dropdownButton.style.backgroundColor = 'black'; // Atur latar belakang tombol ke hitam
            } else {
                navEl.classList.remove('navbar-scrolled');
                dropdownButton.style.backgroundColor = 'transparent'; // Atur latar belakang tombol kembali menjadi transparan
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>