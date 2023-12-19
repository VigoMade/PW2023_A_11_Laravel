@extends('navbarLoginRegister')
@section('content')
<style>
    body {
        background-color: #04192E;
        color: white;
    }

    img {
        border-radius: 20px;
    }

    .custom-input {
        width: 500px;
        height: 45px;
        background-color: #014384 !important;
        color: white !important;
        border: 1px solid #04192E;
        border-radius: 19px;
    }

    .custom-input::placeholder {
        color: white;
    }

    .card {
        color: white;
        border-radius: 20px;
        background-color: #06314CBF !important;

    }

    .login {
        width: 200px;
        height: 35px;
        color: #FFF;
        text-align: center;
        font-family: Marcellus SC;
        border-radius: 20px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<div class="container-fluid px-4 px-md-5 text-lg-start ">
    <div class="row gx-lg-5  ">
        <h1>Now Showing</h1>
    </div>
    <div class="row gx-lg-5 mb-5 ">
        <div class="col-lg-6 mb-5 mt-1 d-flex justify-content-center align-items-center" style="z-index: 10">
            <div class="card bg-danger" style="width: 350px">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner img-fluid">
                        <div class="carousel-item active">
                            <img src="{{ url('img/film1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('img/film2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('img/film3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-1">
            <div class="container-fluid  mt-1">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-4 text-center mt-5">LOGIN WITH YOUR PROFILE</h1>
                    </div>

                    <form action="{{ route('login') }}" class="submit" method="post">
                        @csrf
                        @method('post')
                        <div class="row-fluid mb-4">
                            <div class="col-fluid-12 d-flex justify-content-center align-items-center">
                                <input type="text" class="form-control custom-input" id="email" placeholder="Masukan email" name="email" required>
                            </div>
                        </div>
                        <div class="row-fluid  mb-2">
                            <div class="col-fluid-12 d-flex justify-content-center align-items-center">
                                <input type="password" class="form-control custom-input" id="password" placeholder="Masukan password " name="password" required>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="col text-end me-5">
                                <p><a class="link-opacity-100" href="#">Forgot Password?</a></p>
                            </div>
                        </div>
                        <div class="row-fluid mb-2">
                            <div class="col d-flex justify-content-center align-items-center ">
                                <button type="submit" class="btn btn-warning login">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="row-fluid">
                        <div class="col text-center mb-5 mt-2">
                            <p>Create account?<a href="{{ route('register_view') }}">Create</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('#carouselExampleIndicators').carousel();


        $('#carouselExampleIndicators').carousel({
            interval: 3000
        });
    });
</script>
@endsection