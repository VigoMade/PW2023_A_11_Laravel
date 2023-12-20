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
                    <form action="{{route ('CostumerProfile.update',$user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                        <div class="row mt-3">
                            <div class="col-3 ms-3">
                                <p>Foto Profile</p>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <input type="file" class="form-control @error('imgProfile') is-invalid @enderror" name="imgProfile" value="{{ old('imgProfile', $user->imgProfile) }}">
                                @error('imgProfile')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-1">
                                <img src="{{ url('img/icons8-pencil-50.png') }}" class="pencil" alt="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 ms-3">
                                <p>nama</p>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $user->nama) }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-1">
                                <img src="{{ url('img/icons8-pencil-50.png') }}" class="pencil" alt="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-3 ms-3">
                                <p>Username</p>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $user->username) }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-1">
                                <img src="{{ url('img/icons8-pencil-50.png') }}" class="pencil" alt="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-3 ms-3">
                                <p>BoD</p>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control @error('tanggalLahir') is-invalid @enderror" name="tanggalLahir" value="{{ old('tanggalLahir', $user->tanggalLahir) }}">
                                @error('tanggalLahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-1">
                                <img src="{{ url('img/icons8-pencil-50.png') }}" class="pencil" alt="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-3 ms-3">
                                <p>Email</p>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-1">
                                <img src="{{ url('img/icons8-pencil-50.png') }}" class="pencil" alt="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-3 ms-3">
                                <p>No Hp</p>
                            </div>
                            <div class="col-2">
                                <p>:</p>
                            </div>
                            <div class="col-5">
                                <input type="number" class="form-control @error('noTelp') is-invalid @enderror" name="noTelp" value="{{ old('noTelp', $user->noTelp) }}">
                                @error('noTelp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-1">
                                <img src="{{ url('img/icons8-pencil-50.png') }}" class="pencil" alt="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-primary  mb-5 mt-3">Save</button>
                                <button type="reset" class="btn btn-danger mr-0 mb-5 mt-3">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="card mb-5 mt-5 ">
                    <img src="{{ url('img/office.png') }}" class="img-fluid" alt="">
                    <div class="card-body text-center" style="color:white;">
                        <h1 class="card-title">Hallo {{ $user->nama }}</h1>
                        <p class="card-text text-center">Pastikan Data Kamu Tidak Tersebar!</p>
                    </div>

                </div>

            </div>

        </div>


    </div>


</div>
@endsection