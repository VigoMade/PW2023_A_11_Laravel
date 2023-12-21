@extends('navbarDashboard')
@section('content')
    <style>
        body {
            background-color: #04192E;
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

        .btn-custom {
            position: relative;
            background-color: #CC9F00;
            display: block;
            color: white;
            border-radius: 0;
            top: 60px !important;
        }

        .btn-custom2 {
            position: relative;
            background-color: red;
            display: block;
            color: white;
            top: 61px !important;
            border-radius: 0;
        }

        .btn-custom2:hover {
            background-color: red;
            color: white;
        }

        .btn-custom:hover {
            background-color: black;
            color: #CC9F00;
        }

        .paddingForStickt {
            width: 100%;
        }

        @media (max-width: 768px) {

            .col-md-6.filmBioskop {
                order: 2;
                max-width: 650px;
            }

            .col-md-4 {
                order: 1;

                text-align: center;

            }
        }



        @media (max-width: 550px) {

            .col-md-6.filmBioskop {
                order: 2;
                max-width: 450px;

            }

            .totalPembayaran {
                padding: 0px 15%;
                align-items: center;
                text-align: center;
            }

            .col-md-4 {
                order: 1;

                text-align: center;

            }
        }

        @media (max-width: 450px) {

            .col-md-6.filmBioskop {
                order: 2;
                max-width: 320px;

            }

            .timePayment {
                font-size: 12px;
            }

            .col-md-4 {
                order: 1;

                text-align: center;

            }
        }

        @media (max-width: 300px) {

            .col-md-6.filmBioskop {
                order: 2;
                max-width: 250px;

            }

            .col-md-4 {
                order: 1;

                text-align: center;

            }
        }
    </style>

    <body>
        <main>
            <ul class="list-unstyled">
                <li>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="row containerBody" style="margin-top: 120px;">
                                <div class="col-md-6 filmBioskop">
                                    <h4>Ringkasan Order</h4>
                                    <p class="nomorOrder" style="color: #A8A8A8">NOMOR ORDER :
                                        1790128301218390{{ $transaksi->id }}</p>
                                    <hr>
                                    <div class="detailTransaksi">
                                        <h5 class="mb-4">Detail Transaksi</h5>

                                        <div class="sejajarkan">
                                            <p>TIKET</p>
                                            <p>{{ $transaksi->totalSeat }}x</p>
                                        </div>

                                        <div class="sejajarkan">
                                            <p>KURSI REGULER</p>
                                            <div style="display: flex">
                                                <p class="mr-2">{{ $movieFind->harga }} </p>
                                                <p style="color: #A8A8A8; padding-left: 5px;">x{{ $transaksi->totalSeat }}
                                                </p>
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
                                        <h5 class="mb-4">Promo & Voucher</h5>
                                        <div style="display: flex; align-items: center">
                                            <img src="{{ asset('imgTransaksi2/logoDana.png') }}" alt=""
                                                width="30px" height="30px">

                                            <p>Jika Anda memiliki voucher dari DANA, Anda dapat menggunakannya di halaman
                                                pembayaran seteleh halaman ini. (S&K berlaku)</p>
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
                                            <h3>Rp. {{ $transaksi->totBayar + 4000 }}</h3>
                                        </div>
                                    </div>
                                </div>

                                {{-- sisi kanan --}}
                                <div class="col-md-4" style="text-align: center">
                                    <div class="">
                                        <img style="border-radius: 20px" src="/img/{{ $movieFind->imageMovie }}"
                                            alt="" width="300px">
                                        <h5 style="color: white; margin-top: 20px; ">{{ $movieFind->namaFilm }}
                                        </h5>
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
        <!-- Modal -->
        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">

                <div class="modal-content">
                    <div class="card">
                        <div class="card-body">
                            <div class="container mb-5">
                                <div class="row d-flex align-items-baseline">
                                    <div class="col-xl-9">
                                        <center>
                                            <p style="margin-left:40%"><Strong>PEMBAYARAN BERHASIL DILAKUKAN</Strong></p>
                                        </center>
                                        <p style="color: #111213;font-size: 20px;"><strong>NOMOR ORDER:
                                                1790128301218390{{ $transaksi->id }}</strong></p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <img width="100px" src="/img/cinema.png" alt="">
                                            <h5 class="">CINEMA ATMA</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <ul class="list-unstyled">
                                                <li class="text-muted">To: <span
                                                        style="color:#8f8061 ;">{{ $user->nama }}</span>
                                                </li>
                                                <li class="text-muted">AMBARRUKMO, STUDIO</li>
                                                <li class="text-muted">2900 km - PLAZA AMBARRUKMO LT.3, Jl. ADI SUCIPTO
                                                </li>
                                                <li class="text-muted"><i class="fas fa-phone"></i> 507-231-139</li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-4">
                                            <p class="text-muted">Invoice</p>
                                            <ul class="list-unstyled">
                                                <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i>
                                                    <span class="fw-bold">Seat: </span>{{ $transaksi->seat }}
                                                </li>
                                                <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i>
                                                    <span class="fw-bold">Jam Tayang:
                                                    </span>{{ date('H:i', strtotime($movieFind->jamTayang)) }}
                                                </li>
                                                <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061 ;"></i>
                                                    <span class="fw-bold">Tanggal Tayang:
                                                    </span>{{ $movieFind->tanggalTayang }}
                                                </li>

                                                <li class="text-muted"><i class="fas fa-circle" style="color:#8f8061;"></i>
                                                    <span class="me-1 fw-bold">Status:</span><span
                                                        class="badge bg-primary text-white fw-bold">
                                                        Paid</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-xl-8">
                                        </div>
                                        <div class="col-xl-3">
                                            <ul class="list-unstyled">
                                                <li class="text-muted ms-3"><span class="text-black me-4">Total
                                                        tiket</span>Rp. {{ $movieFind->harga * $transaksi->totalSeat }}
                                                </li>
                                                <li class="text-muted ms-3 mt-2"><span
                                                        class="text-black me-4">Admin</span>Rp. 4000</li>
                                            </ul>
                                            <p class="text-black float-start"><span class="text-black me-3"> Total
                                                    Amount</span><span style="font-size: 25px;">Rp.
                                                    {{ $movieFind->harga * $transaksi->totalSeat + 4000 }}</span></p>
                                        </div>
                                        <div class="col-xl-9">
                                            <center>
                                                <p style="margin-left:40%"><Strong>Ticket Dapat discan melalui My
                                                        Ticket</Strong></p>
                                            </center>
                                        </div>
                                        <a class="btn btn-primary mt-0" href="{{ route('Costumer.index') }}">
                                            Close
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="paddingForStickt">

            <a class="btn btn-custom" style="text-decoration:none;">
                <h4 class="mb-0">PAYMENT</h4>
            </a>
        </div>

    </body>

    <script src="{{ asset('js/transaksi1.js') }}"></script>

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
                window.location.href = "{{ url('dashboard') }}";
            }
        }

        setInterval(updateCountdown, 1000);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentButton = document.querySelector('.btn-custom');
            const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));

            paymentButton.addEventListener('click', function() {
                paymentModal.show();
            });
        });
    </script>
@endsection
