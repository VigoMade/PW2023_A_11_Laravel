@extends('navbarDashboard')
@section('content')
    <style>
        body {
            background-color: #04192E;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            width: 500px;
            height: auto;
            background-color: #04192E;
            border: none;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .profil img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
        }

        .isi {
            background-color: #06314C;
            border-radius: 25px;
            padding: 20px;
        }

        .pencil {
            width: 15px;
            height: 15px;
            cursor: pointer;
        }

        .btn-edit {
            width: 100px;
            height: 40px;
            border-radius: 8px;
            background-color: #2E86C1;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-edit:hover {
            background-color: #1A5276;
        }

        .card-message {
            background-color: #04192E;
            border-radius: 20px;
            border: none;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
    </style>

    <div class="container-fluid px-4 px-md-5 text-lg-start">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="container-fluid mt-4 text-center">
                    <div class="container-fluid mt-2 isi text-center">
                        <div class="row mt-1 text-center mb-3">
                            <div class="col ms-2">
                                <h3>My Profile</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                @if ($user->imgProfile == null)
                                    <div class="profil">
                                        <img src="{{ url('img/user2-160x160.jpg') }}" alt="">
                                    </div>
                                @else
                                    <div class="profil">
                                        <img src="/img/{{ $user->imgProfile }}" alt="profile">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col">
                                <h4>{{ $user->nama }}</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-3 ms-3">
                                <h4>Username</h4>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <p>{{ $user->username }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 ms-3">
                                <h4>Gender</h4>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <p>{{ $user->gender }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 ms-3">
                                <h4>BoD</h4>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <p>{{ $user->tanggalLahir }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 ms-3">
                                <h4>No Hp</h4>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <p>{{ $user->noTelp }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <button class="btn-edit mb-2 mt-3">
                                    <a style="text-decoration: none; color: white"
                                        href="{{ route('CostumerProfile.edit', $user->id) }}">Edit</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="container-fluid d-flex justify-content-center align-items-center">
                    <div class="card-message mb-5 mt-5">
                        <img src="{{ url('img/office.png') }}" class="img-fluid" alt="" width="400px">
                        <div class="card-body text-center">
                            <h1 class="card-title mr-4 ml-4">Hello, {{ $user->nama }}!</h1>
                            <p style="margin-bottom: 30px" class="card-text">Ensure Your Data is Secure!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
