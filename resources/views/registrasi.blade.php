@extends('navbarLoginRegister')
@section('content')
    <style>
        body {
            background-color: #04192E;
            color: white;
        }

        .card {
            width: 400px;
            height: 400px;
            border: 1px solid dark;
            background-color: #04192E
        }

        .custom-input {
            width: 100%;
            height: 10px;
            color: black !important;
            border: 1px solid #04192E;

        }

        .kertas {
            background-color: #06314C;
            border-radius: 10px;
        }

        .register {
            width: 100%;
            height: 40px;
            color: #FFF;
            text-align: center;
            font-family: Marcellus SC;
            border-radius: 20px;
        }
    </style>


    <div class="container-fluid px-4  px-md-5 text-lg-start ">
        <div class="row gx-lg-5 ">
            <div class="col-lg-6 mt-5">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card">
                            <img src="{{ url('img/cinema.png') }}" class="img-fluid" alt="...">
                            <div class="card-body text-center" style="color:white;">
                                <h2 class="card-title-fluid "><a href="{{ url('login') }}">Hallo</a> Penonton!</h2>
                                <p class="card-text-fluid mb-5">Selamat datang di Cinema Atma
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-6 col-lg-6 mt-2 ">
                <div class="container-fluid mt-1 mb-5 kertas">
                    <form action="{{ route('register') }}" class="submit" method="post">
                        @csrf
                        @method('post')
                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <label for="nama">Nama</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <input type="text" class="form-control custom-input" id="nama"
                                    placeholder="isi Nama anda" name="nama" required>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <label for="username">Username</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <input type="text" class="form-control custom-input" id="username"
                                    placeholder="isi Username" name="username" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-fluid-12">
                                <label for="gender">Gender</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="laki" name="gender"
                                        value="Laki-laki">Laki-laki
                                    <label class="form-check-label" for="laki"></label>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="perempuan" name="gender"
                                        value="Perempuan">Perempuan
                                    <label class="form-check-label" for="perempuan"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-fluid-12">
                                <label for="lahir">Tanggal Lahir</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <input type="date" class="form-control custom-input" id="date"
                                    placeholder="Tanggal Lahir" name="tanggalLahir" required>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <input type="text" class="form-control custom-input" id="email"
                                    placeholder="Isi Email" name="email" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <input type="password" class="form-control custom-input" id="password"
                                    placeholder="isi Password" name="password" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <label for="noTelp">Nomor Telpon</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-fluid-12">
                                <input type="text" class="form-control custom-input" id="noTelp"
                                    placeholder="isi No Handphone" name="noTelp" required>
                            </div>
                        </div>
                        <div class="row-fluid mt-3 mb-5">
                            <div class="col d-flex justify-content-center align-items-center ">
                                <button type="submit" class="btn btn-warning register mb-5 mt-3">Register</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
