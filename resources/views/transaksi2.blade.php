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
            background-color: #04192E;
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

            background-color: #06314C;
            color: white;
            border-radius: 30px;
            height: auto;
            margin-left: 10%;
        }

        .filmBioskop img {
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .filmBioskop h4 {
            padding-left: 5%;
            padding-top: 25px;
        }

        .nomorOrder {
            color: #A8A8A8;
            padding-left: 0px 10px;
            padding-top: 25px;
        }

        .detailTransaksi {
            color: white;
            padding-left: 0px 10px;
            padding-top: 25px;
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

        .sejajarkan {
            display: flex;
            justify-content: space-between;
            height: 30px;
        }

        .promoVoucher {
            margin-left: 0 10px;
        }

        .promoVoucher img {
            margin-right: 20px;

        }

        .notedOrder {
            color: rgb(237, 100, 100);
            padding-left: 0px 10px;
        }

        .totalPembayaran {
            padding: 0px 30%;
            align-items: center;
            text-align: center;
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

    <main>
        <ul class="list-unstyled">
            <li>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="row containerBody">
                            <div class="col-md-6 filmBioskop">
                                <h4>Ringkasan Order</h4>
                                <p class="nomorOrder" style="color: #A8A8A8">NOMOR ORDER : 1790128301283921839012</p>

                                <hr>
                                <div class="detailTransaksi">
                                    <h5 class="mb-4">Detail Transaksi</h5>

                                    <div class="sejajarkan">
                                        <p>TIKET</p>
                                        <p>5x</p>
                                    </div>

                                    <div class="sejajarkan">
                                        <p>KURSI REGULER</p>
                                        <div style="display: flex">
                                            <p class="mr-2">Rp.50000 </p>
                                            <p style="color: #A8A8A8; padding-left: 5px;">x1</p>
                                        </div>
                                    </div>

                                    <div class="sejajarkan">
                                        <p>Biaya Layanan</p>
                                        <div style="display: flex">
                                            <p class="mr-2">Rp.4000 </p>
                                            <p style="color: #A8A8A8; padding-left: 5px;">x1</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="promoVoucher">
                                    <h5 class="mb-4">Detail Transaksi</h5>
                                    <div style="display: flex; align-items: center">
                                        <img src="imgTransaksi2/logoDana.png" alt="" width="30px"
                                            height="30px">

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias omnis
                                            possimus soluta facilis facere non commodi pariatur optio. Cumque illum
                                            obcaecati fugiat aliquid deserunt necessitatibus?</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="timePayment" style="padding-left: 0px 10px; height: 20px;">
                                    <div style="display: flex">
                                        <p>Selesaikan Pembayaran Anda Dalam</p>
                                        <span id="countdown"
                                            style="color: rgb(237, 100, 100); padding-left: 20px;"></span></p>

                                    </div>
                                </div>
                                <hr>

                                <div class="notedOrder">
                                    <p style="margin-bottom: 0px">1. Pembayaran ticket tidak bisa dirubah / dibatalkan.
                                    </p>
                                    <p>2. Untuk Anak Usia 2 tahun keatas wajib membeli tiket</p>
                                </div>
                                <hr>

                                <div class="totalPembayaran" style="margin-bottom: 20px">
                                    <div style="display: flex; justify-content: space-between">
                                        <p style="height: 20px; margin-top: 5px;">TOTAL BAYAR</p>
                                        <h3>Rp 50000</h3>
                                    </div>
                                </div>
                            </div>

                            {{-- sisi kanan --}}
                            <div class="col-md-4" style="text-align: center">
                                <div class="">
                                    <img style="border-radius: 20px" src="imgTransaksi1/posterSherina2.jpg"
                                        alt="" width="300px">
                                    <h5 style="color: white; margin-top: 20px; ">PETUALANGAN SHERINA
                                        2</h5>
                                    <p style="color: white; margin-top: 30px;margin-bottom: 0px">AMBARRUKMO, STUDIO 5
                                    </p>
                                    <p class="" style="color: #A8A8A8">2900 km - PLAZA AMBARRUKMO LT.3, Jl.
                                        ADI SUCIPTO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </main>

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

    <script>
        // set waktu 5 menit
        let timeInSeconds = 6 * 50 + 0;

        function updateCountdown() {
            const minutes = Math.floor(timeInSeconds / 60);
            const seconds = timeInSeconds % 60;
            const formattedTime = `${minutes.toString().padStart(2, '0')} : ${seconds.toString().padStart(2, '0')}`;
            document.getElementById('countdown').textContent = formattedTime;

            // Decrease
            timeInSeconds--;


            if (timeInSeconds < 0) {
                //nanti bakal di route ke halaman sebelum pembayaran

            }
        }

        setInterval(updateCountdown, 1000);
    </script>
</body>

</html>
