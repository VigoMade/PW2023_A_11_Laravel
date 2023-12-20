@extends('navbarDashboard')

@section('content')
    <?php
    $images = ['img/banner1.jpg', 'img/banner2.jpg', 'img/banner3.jpg'];
    $displayedMovies = [];
    ?>
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
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            @if (isset($user))
                                <p>Welcome, {{ $user->nama }}!</p>
                            @endif
                            <h3 class="mb-3">Now Playing</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                                data-slide="prev" style="background-color:#CEA945">
                                <i class="fa fa-arrow-left"></i>Previous
                            </a>
                            <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button"
                                data-slide="next" style="background-color:#CEA945">
                                Next <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @forelse ($movies->chunk(3) as $key => $chunk)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <div class="row">
                                                @foreach ($chunk as $movie)
                                                    @if (!in_array($movie->namaFilm, $displayedMovies))
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card" style="width: 71%; height: 93%;">
                                                                <a
                                                                    href="{{ route('show_transaksi', ['movie' => $movie->id]) }}">
                                                                    <img class="img-fluid" alt="{{ $movie->nama }}"
                                                                        src="/img/{{ $movie->imageMovie }}" />
                                                                </a>
                                                                <div class="card-body">
                                                                    <h4 class="card-title">{{ $movie->namaFilm }}</h4>
                                                                    <p class="card-text">
                                                                        {{ $movie->sinopsis }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Tambahkan nama film ke array displayedMovies --}}
                                                        @php
                                                            $displayedMovies[] = $movie->namaFilm;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @empty
                                        <div class="alert alert-danger">
                                            No Movies Available.
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="col-6">
            <h3 class="mb-3" style="color:white; margin-left:100px; margin-top:40px;"><Strong>Our Facilities</Strong></h3>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php foreach ($images as $i => $gbr) {
        ?>
            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                <img src="<?php echo $gbr; ?>" class="d-block w-100" role="img"
                    aria-label="Gambar ke-<?php echo $i + 1; ?>" focusable="false" />
            </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
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
    <footer class="bg-light text-center text-lg-start sticky-bottom">
        <div class="text-center p-3" style="background-color: #03213B; color:white; font-family:Marcellus SC;">
            Kelompok 11 © 2023 Copyright:
            <a class="text-white" href="https://github.com/VigoMade/UTSWeb_A_11.git">UTS Web A Kelompok 11</a>
        </div>
    </footer>
@endsection
