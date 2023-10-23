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
                                                    <a href="" class="btn btn-jamJadwal">20 : 00</a>
                                                    <a href="#" class="btn btn-jamJadwal">21 : 00</a>
                                                    <a href="#" class="btn btn-jamJadwal">22 : 00</a>
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
                                                        <a href="" class="btn btn-jamJadwal">20 : 00</a>
                                                        <a href="#" class="btn btn-jamJadwal">21 : 00</a>
                                                        <a href="#" class="btn btn-jamJadwal">22 : 00</a>
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
                                                        <a href="" class="btn btn-jamJadwal">20 : 00</a>
                                                        <a href="#" class="btn btn-jamJadwal">21 : 00</a>
                                                        <a href="#" class="btn btn-jamJadwal">22 : 00</a>
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
                                                        <a href="" class="btn btn-jamJadwal">20 : 00</a>
                                                        <a href="#" class="btn btn-jamJadwal">21 : 00</a>
                                                        <a href="#" class="btn btn-jamJadwal">22 : 00</a>
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

        <a href="{{url('transaksi2')}}" class="btn btn-custom" style="text-decoration:none;">
            <h4 class="mb-0">Beli Tiket</h4>
        </a>

    </div>


    <script src="{{ asset('js/transaksi1.js') }}"></script>
</body>

@endsection