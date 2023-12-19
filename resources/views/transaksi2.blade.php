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
                                    <p class="nomorOrder" style="color: #A8A8A8">NOMOR ORDER : 1790128301283921839012</p>

                                    <hr>
                                    <div class="detailTransaksi">
                                        <h5 class="mb-4">Detail Transaksi</h5>
                                        <p>id transaksi : {{ $transaksi->id }}</p>
                                        <p>id user : {{ $user->id }}</p>
                                        <p>id movie : {{ $movieFind->id }}</p>
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
                                            <img src="imgTransaksi2/logoDana.png" alt="" width="30px"
                                                height="30px">

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

            <a href="{{ url('dashboard') }}" class="btn btn-custom" style="text-decoration:none;">
                <h4 class="mb-0">PAYMENT</h4>
            </a>
            <a href="{{ url('dashboard') }}" class="btn btn-custom2" style="text-decoration:none;">
                <h4 class="mb-0">Cancel</h4>
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
@endsection
