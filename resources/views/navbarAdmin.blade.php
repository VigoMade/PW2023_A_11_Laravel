<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            font-family: 'Marcellus SC', serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: transparent;
            transition: background-color 0.5s;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 40px;
            color: #03213B;
        }

        .navbar-toggler {
            border: none;
            outline: none;
            padding: 5px;
            color: #03213B;
        }

        .navbar-toggler:hover {
            color: #216869;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            color: #03213B;
            transition: color 0.3s;
            text-align: center;
            display: block;
            padding: 10px 0;
        }

        .navbar-nav .nav-link:hover {
            color: #216869;
        }

        .offcanvas-header {
            border-bottom: 1px solid #03213B;
        }

        .offcanvas-title {
            color: #03213B;
        }

        .offcanvas-body .nav-link {
            color: #fff;
            font-size: 20px;
            transition: color 0.3s;
        }

        .offcanvas-body .nav-link:hover {
            color: #c1dce8;
        }

        .navbar-nav .nav-item {
            display: inline-block;
            margin-bottom: 10px;
        }

        .navbar-scrolled {
            background-color: #03213B !important;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
        }


        form.d-flex {
            background-color: transparent;
            /* Mengatur latar belakang transparan */
        }

        /* Style untuk input pencarian */
        form.d-flex input[type="search"] {
            background-color: transparent;
            /* Mengatur latar belakang input transparan */
            border: none;
            /* Menghapus border default */
            border-bottom: 1px solid #ccc;
            /* Menambahkan border bawah dengan warna abu-abu muda */
            outline: none;
            /* Menghapus outline pada focus */
            border-radius: 0;
            color: #fff;
            /* Menghapus border radius */
        }

        /* Style untuk tombol pencarian */
        form.d-flex button {
            background-color: transparent;
            /* Mengatur latar belakang tombol transparan */
            border: none;
            /* Menghapus border default */
            outline: none;
            /* Menghapus outline pada focus */
            /* Jika Anda ingin menambahkan gaya tambahan pada tombol, Anda dapat menyesuaikan di sini */
        }

        /* Style untuk mengatur tampilan saat input dalam keadaan fokus */
        form.d-flex input[type="search"]:focus {
            border-bottom: 2px solid #ffffff;
            /* Mengubah border bawah menjadi solid dan warna hijau ketika dalam keadaan fokus */
        }

        /* Style untuk mengatur tampilan saat input dalam keadaan klik (active) */
        form.d-flex input[type="search"]:active,
        form.d-flex button:active {
            /* Tambahkan gaya yang diinginkan saat elemen dalam keadaan aktif (diklik) */
            /* Contoh: */
            transform: scale(0.98);
            /* Mengurangi skala elemen untuk memberikan efek klik */
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

            <div class="btn-group">
                <button id="dropdown-button" type="button" class="btn" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false" style="background-color: #03213B; color: white;">
                    <img src="{{ asset('img/avatar2.png') }}" alt="Avatar" class="rounded-circle"
                        style="width: 32px; height: 32px;"> Admin <i class="fas fa-caret-down"></i>
                </button>

                <ul class=" dropdown-menu dropdown-menu-lg-end" style="background-color: #03213B;">
                    <li><a class=" dropdown-item" href="{{ url('loginAdmin') }}" style="color: white;"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-sign-out-alt"></i>
                            Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel" style="background-color:#03213B !important;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Admin</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>

                <li class="nav-item mt-5">
                    <a class="nav-link active" aria-current="page" href="{{ route('AdminIndex.index') }}"
                        style="font-size: 25px">Admin Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Admin.index') }}" style="font-size: 25px">Daftar Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('UserControl') }}" style="font-size: 25px">User Control</a>
                </li>
            </ul>

        </div>
    </div>
    </div>
    </nav>

    <div class="content-wrapper">
        @yield('content')
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header custom-header" style="background-color: #0069d9">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color:white;">Apakah Ingin Logout?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ route('logoutAdmin') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <script>
        const navEl = document.querySelector('.navbar');
        const dropdownButton = document.getElementById('dropdown-button');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navEl.classList.add('navbar-scrolled');
                dropdownButton.style.backgroundColor = '#03213B';
            } else {
                navEl.classList.remove('navbar-scrolled');
                dropdownButton.style.backgroundColor = 'transparent';
            }
        });
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
