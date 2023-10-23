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
            background-color: #014384;
        }

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

        .navbar {
            background-color: transparent;
            transition: background-color 0.5s;
        }

        .navbar.navbar-scrolled {
            background-color: black;
        }

        .navbar.navbar-scrolled .navbar-text {
            color: white;
            /* Warna teks diubah menjadi putih saat navbar berubah warna */
        }

        .TitleNavbar {
            margin: 0px 0px;
            color: white;
        }

        .containerBody {
            margin-top: 30px;
        }



        .jadwalBioskop {
            background-color: #014384;
            display: flex;
            flex-direction: row;
            align-items: center;
            overflow-x: auto;
            white-space: nowrap;
            overflow: hidden;

        }

        .jadwal {
            border: 2px solid white;
            margin: 10px 10px;
            padding: 0px 10px;
            align-items: center;
            text-align: center;
            border-radius: 10px;
            color: white;
            display: inline-block;
            background-color: #06314C;
        }


        .jadwalDetail {
            padding: 0px 20px;
            display: inline-block;
            width: 150px;

        }

        .jadwal:hover {
            background-color: #fff;
            color: #000;
            cursor: pointer;
        }

        .jadwal:focus {
            outline: none;

        }

        .jadwal-disable {
            border: 2px solid #014384;
            margin: 10px 10px;
            padding: 0px 10px;
            align-items: center;
            text-align: center;
            border-radius: 10px;


            background-color: #06314C;
        }

        .filmBioskop {
            align-items: center;
            text-align: center;
            color: white;
        }

        .filmBioskop img {
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .cardBodyJamJadwal {
            background-color: #06314C;
        }

        .jamJadwal .card {
            border: 3px solid #06314C;
            color: white;
            margin-top: 15px;
        }

        .jamTayang a {
            color: white;
            background-color: #014384;
        }

        .alamatBioskop {
            color: #A8A8A8;
            font-size: 10px;
            padding-bottom: 20px;
        }

        .sticky-footer {

            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #000;
            color: #CC9F00;
            text-align: center;
            padding: 15px 0;
            z-index: 999;

        }

        .paddingForStickt {
            margin: 100px 0px;
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

            <div class="navbar-brand mx-auto ">
                <p class="TitleNavbar" style="font-family:Marcellus SC; font-size:20px;"> CINEMA ATMA</p>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
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



    <ul class="list-unstyled">
        <li>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row containerBody">
                        <div class="col-md-9 filmBioskop">

                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <img src="imgTransaksi1/posterSherina2.jpg" alt="" width="250px">
                                <h5>PETUALANGAN SHERINA 2</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="paddingForStickt">

    </div>
    <footer class="sticky-footer">
        <div class="container text-center">
            <h4 class="mb-0">Beli Tiket</h4>
        </div>
    </footer>

    <script src="{{ asset('js/transaksi1.js') }}"></script>

    <script>
        const navEl = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY < 10) {
                navEl.classList.add('navbar-scrolled');
            } else {
                navEl.classList.remove('navbar-scrolled');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
