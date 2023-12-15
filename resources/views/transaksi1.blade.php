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
        background-color: #06314C;
        display: flex;
        flex-direction: row;
        align-items: center;
        overflow-x: auto;
        white-space: nowrap;
        overflow: hidden;
        border-radius: 10px;
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
        border: 2px solid #06314C;
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

    .btn-custom:hover {
        background-color: black;
        color: #CC9F00;
    }

    .btn-custom {
        background-color: #CC9F00;
        display: block;
        color: white;
        border-radius: 0;
    }

    .btn-jamJadwal {
        background-color: #014384;
        color: white;
    }

    .focused {
        background-color: #fff;
        /* Warna latar belakang yang diinginkan saat diklik */
        color: #000;
        /* Warna teks yang diinginkan saat diklik */
        cursor: pointer;
        /* Ubah kursor saat diklik (opsional) */
    }
</style>


<body>
    <ul class="list-unstyled">
        <li>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row containerBody">
                        <div class="col-md-3 filmBioskop">
                            <div class="">
                                <img src="imgTransaksi1/posterSherina2.jpg" alt="" width="250px">
                                <h5>PETUALANGAN SHERINA 2</h5>
                                <div style="margin: 0px 30px;">
                                    <p>SHERINA (Sherina Munaf) dan SADAM (Derby Romero), dua teman kecil yang lama
                                        terpisah,
                                        bertemu kembali di Kalimantan untuk pelepasliaran orang utan. Reuni manis
                                        terhenti
                                        ketika anak orang utan bernama SAYU dicuri sekelompok orang.Sherina dan Sadam
                                        harus
                                        berusaha menemukan kembali kebersamaan, demi menyelamatkan Sayu dan juga
                                        kelangsungan persahabatan mereka yang baru saja tumbuh kembali. Sebuah sekuel
                                        dari
                                        film legendaris, bernuansa musikal dengan sentuhan aksi petualangan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="jadwalBioskop">

                                <div class="jadwal" onclick="">
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>HARI INI</h5>
                                    </div>
                                </div>


                                <button class="jadwal">
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>KAMIS</h5>
                                    </div>
                                </button>

                                <button class="jadwal">
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>JUMAT</h5>
                                    </div>
                                </button>

                                <button class="jadwal">
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>SABTU</h5>
                                    </div>
                                </button>

                                <button class="jadwal-disable" disabled>
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>MINGGU</h5>
                                    </div>
                                </button>

                                <button class="jadwal-disable" disabled>
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>SENIN</h5>
                                    </div>
                                </button>

                                <button class="jadwal-disable" disabled>
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>SELASA</h5>
                                    </div>
                                </button>

                                <button class="jadwal-disable" disabled>
                                    <div class="jadwalDetail">
                                        <p class="mb-0">14 Okt</p>
                                        <h5>RABU</h5>
                                    </div>
                                </button>
                            </div>

                            <div class="jamJadwal">
                                <div class="card">
                                    <div class="card-body cardBodyJamJadwal">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title">AMBARRUKMO XXI</h5>
                                                <p class="alamatBioskop">2900 km - PLAZA AMBARRUKMO LT.3, Jl. ADI
                                                    SUCIPTO </p>
                                                <h5 style="color: #A8A8A8">2D</h5>
                                                <div class="jamTayang">
                                                    <div class="btn btn-jamJadwal">20 : 00</div>
                                                    <div class="btn btn-jamJadwal">21 : 00</div>
                                                    <div class="btn btn-jamJadwal">22 : 00</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="imgTransaksi1/iconXXI.png" alt="" width="30px">
                                                <p>Rp. 50.000,00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="jamJadwal">
                                    <div class="card">
                                        <div class="card-body cardBodyJamJadwal">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h5 class="card-title">AMBARRUKMO XXI</h5>
                                                    <p class="alamatBioskop">2900 km - PLAZA AMBARRUKMO LT.3, Jl. ADI
                                                        SUCIPTO </p>
                                                    <h5 style="color: #A8A8A8">2D</h5>
                                                    <div class="jamTayang">
                                                        <div class="btn btn-jamJadwal">20 : 00</div>
                                                        <div class="btn btn-jamJadwal">21 : 00</div>
                                                        <div class="btn btn-jamJadwal">22 : 00</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="imgTransaksi1/iconXXI.png" alt="" width="30px">
                                                    <p>Rp. 50.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body cardBodyJamJadwal">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h5 class="card-title">AMBARRUKMO XXI</h5>
                                                    <p class="alamatBioskop">2900 km - PLAZA AMBARRUKMO LT.3, Jl. ADI
                                                        SUCIPTO </p>
                                                    <h5 style="color: #A8A8A8">2D</h5>
                                                    <div class="jamTayang">
                                                        <div class="btn btn-jamJadwal">20 : 00</div>
                                                        <div class="btn btn-jamJadwal">21 : 00</div>
                                                        <div class="btn btn-jamJadwal">22 : 00</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="imgTransaksi1/iconXXI.png" alt="" width="30px">
                                                    <p>Rp. 50.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body cardBodyJamJadwal">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h5 class="card-title">AMBARRUKMO XXI</h5>
                                                    <p class="alamatBioskop">2900 km - PLAZA AMBARRUKMO LT.3, Jl. ADI
                                                        SUCIPTO </p>
                                                    <h5 style="color: #A8A8A8">2D</h5>
                                                    <div class="jamTayang">
                                                        <div class="btn btn-jamJadwal">20 : 00</div>
                                                        <div class="btn btn-jamJadwal">21 : 00</div>
                                                        <div class="btn btn-jamJadwal">22 : 00</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="imgTransaksi1/iconXXI.png" alt="" width="30px">
                                                    <p>Rp. 50.000,00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </li>
    </ul>

    <div class="paddingForStickt">

        <a href="{{ url('seatBioskop') }}" class="btn btn-custom" style="text-decoration:none;">
            <h4 class="mb-0">Beli Tiket</h4>
        </a>

    </div>



</body>

<footer class="bg-light text-center text-lg-start sticky-bottom">
    <div class="text-center p-3" style="background-color: #03213B; color:white; font-family:Marcellus SC;">
        Kelompok 11 © 2023 Copyright:
        <a class="text-white" href="https://github.com/VigoMade/UTSWeb_A_11.git">UTS Web A Kelompok 11</a>
    </div>
</footer>
<script src="{{ asset('js/transaksi1.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var jadwalButtons = document.querySelectorAll('.jadwal');

        jadwalButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Hapus kelas 'focused' dari semua tombol jadwal
                jadwalButtons.forEach(function(btn) {
                    btn.classList.remove('focused');
                });

                // Tambahkan kelas 'focused' ke tombol yang diklik
                button.classList.add('focused');
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var jamJadwalButtons = document.querySelectorAll('.btn-jamJadwal');

        jamJadwalButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Hapus kelas 'focused' dari semua tombol btn-jamJadwal
                jamJadwalButtons.forEach(function(btn) {
                    btn.classList.remove('focused');
                });

                // Tambahkan kelas 'focused' ke tombol yang diklik
                button.classList.add('focused');
            });
        });
    });
</script>
@endsection