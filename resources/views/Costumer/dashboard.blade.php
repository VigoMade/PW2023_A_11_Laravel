@extends('navbarDashboard')

@section('content')

<style>
    body {

        background-color: #04192E;
    }

    .row {
        color: white;
    }

    .card {
        display: flex;
        position: relative;
        background-color: transparent;
    }

    .card .card-text,
    .card .card-title {
        display: none;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px;
        left: 0;
        right: 0;
    }

    .card .card-text {
        bottom: 0;
    }

    .card:hover .card-text {
        display: block;
    }

    .card .card-title {
        top: 0;
    }

    .card:hover .card-title {
        display: block;
    }
</style>
<div class="container d-flex" style="margin-top: 95px;">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3"><Strong>Now Playing</Strong></h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev" style="background-color:#CEA945;">
                <i class="fa fa-arrow-left"></i> Previous
            </a>
            <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next" style="background-color:#CEA945;">
                Next <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="margin-left:50px;">
                    @php
                    $chunks = array_chunk($movie, 3);
                    @endphp
                    @foreach($chunks as $key => $chunk)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach($chunk as $film)
                            <div class="col-md-4 mb-3">
                                <div class="card" style="width: 288px; height:424px;">
                                    <a href="#">
                                        <div style="width: 288px; height:424px;">
                                            <img class="img-fluid" style="width: 100%; height: 100%;" alt="290x426" src="{{ $film['gambar'] }}" />
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            {{ $film['judul'] }}
                                        </h4>
                                        <p class="card-text">
                                            {{ $film['sinopsis'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<div id="carouselExampleIndicators" class="carousel slide">
    <div class="col-6">
        <h3 class="mb-3" style="color:white; margin-left:100px; margin-top:40px;"><Strong>Our Facilities</Strong></h3>
    </div>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cinepolis.co.id/images/temp/banner_jomo_02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cinepolis.co.id/images/temp/banner_luxe_02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cinepolis.co.id/images/temp/banner_luxe_02.jpg" class="d-block w-100" alt="...">
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fa-arrow-left").click(function() {
            $("#carouselExampleIndicators2").carousel("prev");
        });
        $(".fa-arrow-right").click(function() {
            $("#carouselExampleIndicators2").carousel("next");
        });
    });
</script>
</body>

@endsection