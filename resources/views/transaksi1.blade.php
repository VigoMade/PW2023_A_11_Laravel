@php
    $previousDate = null;
@endphp

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
                                    <img src="/img/{{ $movieFind->imageMovie }}" alt="" width="250px">
                                    <h5>{{ $movieFind->namaFilm }}</h5>
                                    <div style="margin: 0px 30px;">
                                        <p>{{ $movieFind->sinopsis }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="jadwalBioskop">

                                    @foreach ($movies as $movie)
                                        @if ($movie->namaFilm === $movieFind->namaFilm)
                                            @php
                                                $currentDate = date('d M', strtotime($movie->tanggalTayang));
                                                if ($currentDate !== $previousDate) {
                                                    $previousDate = $currentDate;
                                                } else {
                                                    continue; // Skip to the next iteration if date and month match the previous one
                                                }
                                            @endphp

                                            <button class="jadwal" onclick="">
                                                <div class="jadwalDetail">
                                                    <p class="mb-0">
                                                        {{ $currentDate }}
                                                    </p>
                                                    <h5>{{ date('l', strtotime($movie->tanggalTayang)) }}</h5>
                                                </div>
                                            </button>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="jamJadwal">

                                    <div class="card">
                                        <div class="card-body cardBodyJamJadwal">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <!-- Tampilkan informasi film lain -->
                                                    <h5 class="card-title">AMBARRUKMO XXI</h5>
                                                    <p class="alamatBioskop">2900 km - PLAZA AMBARRUKMO LT.3, Jl. ADI
                                                        SUCIPTO </p>
                                                    <div class="jamTayang">
                                                        <h5 style="color: #A8A8A8">{{ $movieFind->genre }}</h5>

                                                        @foreach ($movies as $movie)
                                                            @if ($movie->namaFilm === $movieFind->namaFilm)
                                                                <div class="btn btn-jamJadwal" movieid="{{ $movie->id }}"
                                                                    data-date="{{ date('d M', strtotime($movie->tanggalTayang)) }}">
                                                                    {{ date('H:i', strtotime($movie->jamTayang)) }}

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {{-- <img src="{{ $other_movie->gambar }}" alt="" width="30px">
                                                    <p>{{ $other_movie->harga }}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="jamJadwal">
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
                                    </div> --}}



                            {{-- <div class="jamJadwal">
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
                                        </div> --}}
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </li>
        </ul>
        <div class="paddingForStickt">
            <a href="{{ route('seatBioskop_view', ['movie' => $movie->id]) }}" class="btn btn-custom"
                style="text-decoration:none;">
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
            var jamJadwalButtons = document.querySelectorAll('.btn-jamJadwal');
            var movieId = null;

            jadwalButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Remove focus from all jadwal buttons
                    jadwalButtons.forEach(function(btn) {
                        btn.classList.remove('focused');
                    });

                    // Add focus to the clicked jadwal button
                    button.classList.add('focused');

                    // Get the selected date from the clicked jadwal button
                    var selectedDate = button.querySelector('.jadwalDetail p').innerText;

                    // Filter and show/hide jamJadwal buttons based on the selected date
                    jamJadwalButtons.forEach(function(jamButton) {
                        var jamButtonDate = jamButton.getAttribute('data-date');
                        jamButton.style.display = jamButtonDate === selectedDate ?
                            'inline-block' : 'none';
                    });
                });
            });

            jamJadwalButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Remove focus from all jamJadwal buttons
                    jamJadwalButtons.forEach(function(btn) {
                        btn.classList.remove('focused');
                    });

                    // Add focus to the clicked jamJadwal button
                    button.classList.add('focused');
                    movieId = button.getAttribute('movieid');
                });
            });

            var beliTiketButton = document.querySelector('.paddingForStickt a.btn-custom');
            beliTiketButton.addEventListener('click', function(event) {
                event.preventDefault();
                var url = "{{ route('seatBioskop_view', ['movie' => ':movieId']) }}";
                url = url.replace(':movieId', movieId);
                window.location.href = url;
            });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var jadwalButtons = document.querySelectorAll('.jadwal');

            jadwalButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    jadwalButtons.forEach(function(btn) {
                        btn.classList.remove('focused');
                    });

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
                    jamJadwalButtons.forEach(function(btn) {
                        btn.classList.remove('focused');
                    });
                    button.classList.add('focused');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var movieId = null;

            var jamJadwalButtons = document.querySelectorAll('.btn-jamJadwal');
            jamJadwalButtons.forEach(function(button) {
                button.addEventListener('click', function() {

                    jamJadwalButtons.forEach(function(btn) {
                        btn.classList.remove('focused');
                    });
                    button.classList.add('focused');
                    movieId = button.getAttribute('movieid');
                });
            });

            var beliTiketButton = document.querySelector('.paddingForStickt a.btn-custom');
            beliTiketButton.addEventListener('click', function(event) {
                event.preventDefault();
                var url = "{{ route('seatBioskop_view', ['movie' => ':movieId']) }}";
                url = url.replace(':movieId', movieId);
                window.location.href = url;
            });
        });
    </script>
@endsection
