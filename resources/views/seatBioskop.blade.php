@extends('navbarDashboard')
@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato&display=swap");

        .containerBody {
            margin-top: 30px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #03213B;
            color: #fff;
            /* display: flex;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flex-direction: column;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            align-items: center;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            justify-content: center; */
            height: auto;
        }

        .main-content {
            flex: 1;
            /* Mengisi ruang konten utama */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-bottom: 50px;
            /* Tinggi footer */
        }


        .movie-container {
            margin: 20px 0;
        }

        .movie-container select {
            background-color: #fff;
            border: 0;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 10px;
            padding: 5px 15px 5px 15px;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
        }

        .pembungkusSeat {
            perspective: 1000px;
            margin-bottom: 30px;
        }

        .seat {
            background-color: #444451;
            height: 26px;
            width: 32px;
            margin: 3px;
            padding-top: 5px;
            padding-left: 7px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;


            font-size: 12px;
            user-select: none;
        }

        .seat.selected {
            background-color: green;
        }

        .seat.sold {
            background-color: #fff;
        }

        .seat:nth-of-type(2) {
            margin-right: 18px;
        }

        .seat:nth-last-of-type(2) {
            margin-left: 18px;
        }

        .seat:not(.sold):hover {
            cursor: pointer;
            transform: scale(1.2);
        }

        .showcase .seat:not(.sold):hover {
            cursor: default;
            transform: scale(1);
        }

        .showcase {
            background: rgba(0, 0, 0, 0.1);
            padding: 5px 10px;
            border-radius: 5px;
            color: #777;
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }

        .showcase li {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
        }

        .showcase li small {
            margin-left: 2px;
        }

        .row {
            display: flex;
        }

        .screen {
            background-image: url('/imgSeatBioskop/bgScreen5.jpg');
            /* Gantilah 'url_gambar_anda.jpg' dengan URL gambar yang ingin Anda gunakan */
            background-size: cover;
            /* Untuk memastikan gambar mencakup seluruh elemen */
            height: 120px;
            width: 100%;
            margin: 15px 0;
            transform: rotateX(-48deg);
            box-shadow: 0 3px 10px rgba(5, 5, 5, 0.7);
        }

        p.text {
            margin: 5px 0;
        }

        p.text span {
            color: rgb(158, 248, 158);
        }


        .seatBioskop {
            margin-top: 10%;
            margin-left: 20%;
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

        @media (max-width: 720px) {

            .seatBioskop {
                margin-top: 150px;
                margin-left: 30px;
                max-width: 300px;

            }

            .text {
                text-align: center;
            }

            .seat {
                background-color: #444451;
                height: 25px;
                width: 15px;
                margin: 3px;
                padding-top: 5px;
                padding-left: 2px;
                padding-right: 5px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;


                font-size: 8px;
                user-select: none;
            }
        }

        @media (max-width: 450px) {

            .seatBioskop {
                margin-top: 100px;
                margin-left: 30px;
                max-width: 300px;
                ;
            }

            .text {
                text-align: center;
            }


            .seat {
                background-color: #444451;
                height: 25px;
                width: 15px;
                margin: 3px;
                padding-top: 5px;
                padding-left: 2px;
                padding-right: 5px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;


                font-size: 8px;
                user-select: none;
            }
        }

        @media (max-width: 290px) {
            .container-fluid a {
                font-size: 10px;
            }
        }
    </style>

    <body>
        <div class="seatBioskop">
            <h3>AMBARRUKMO</h3>
            <p style="color: #A8A8A8;">2900 km - PLAZA AMBARRUKMO LT.3, Jl. ADI SUCIPTO</p>
        </div>
        <div class="main-content">


            <div class="movie-container">
                <h5 id="movie"> </h5>
            </div>

            <ul class="showcase">
                <li>
                    <div class="seat"></div>
                    <small>Available</small>
                </li>

                <li>
                    <div class="seat selected"></div>
                    <small>Selected</small>
                </li>

                <li>
                    <div class="seat sold"></div>
                    <small>Sold</small>
                </li>

            </ul>

            <form action="{{ route('transaksi.store', ['movie' => $movieFind->id]) }}" class="submit" method="POST">
                @csrf
                @method('post')
                <input type="hidden" name="id_user" value="{{ $user->id }}">
                <input type="hidden" name="id_movie" value="{{ $movieFind->id }}">
                <input type="hidden" name="seat" id="selected-seats" value="">
                <input type="hidden" name="totalSeat" id="totalSeat" value="">
                <input type="hidden" name="totBayar" id="total-payment" value="">


                <div class="pembungkusSeat">
                    <div class="screen" style="margin-bottom: 40px;">
                        {{-- <img src="/imgSeatBioskop/bgScreen5.jpg" alt="" width="450px;" height="300px"> --}}
                    </div>

                    <div class="containerSeat ">
                        <div class="row ml-2">
                            <div class="seat">
                                A1
                            </div>
                            <div class="seat">A2</div>
                            <div class="seat">A3</div>
                            <div class="seat">A4</div>
                            <div class="seat">A5</div>
                            <div class="seat">A6</div>
                            <div class="seat">A7</div>
                            <div class="seat">A8</div>
                            <div class="seat">A9</div>
                            <div class="seat">A10</div>
                            <div class="seat">A11</div>
                            <div class="seat">A12</div>
                        </div>

                        <div class="row ml-2">
                            <div class="seat">B1</div>
                            <div class="seat">B2</div>
                            <div class="seat">B3</div>
                            <div class="seat sold">B4</div>
                            <div class="seat sold">B5</div>
                            <div class="seat">B6</div>
                            <div class="seat">B7</div>
                            <div class="seat">B8</div>
                            <div class="seat sold">B9</div>
                            <div class="seat">B10</div>
                            <div class="seat">B11</div>
                            <div class="seat">B12</div>
                        </div>
                        <div class="row ml-2">
                            <div class="seat">C1</div>
                            <div class="seat">C2</div>
                            <div class="seat">C3</div>
                            <div class="seat">C4</div>
                            <div class="seat">C5</div>
                            <div class="seat">C6</div>
                            <div class="seat sold">C7</div>
                            <div class="seat sold">C8</div>
                            <div class="seat">C9</div>
                            <div class="seat">C10</div>
                            <div class="seat sold">C11</div>
                            <div class="seat sold">C12</div>
                        </div>
                        <div class="row ml-2">
                            <div class="seat">D1</div>
                            <div class="seat">D2</div>
                            <div class="seat">D3</div>
                            <div class="seat">D4</div>
                            <div class="seat">D5</div>
                            <div class="seat">D6</div>
                            <div class="seat">D7</div>
                            <div class="seat">D8</div>
                            <div class="seat">D9</div>
                            <div class="seat">D10</div>
                            <div class="seat">D11</div>
                            <div class="seat">D12</div>

                        </div>
                        <div class="row ml-2">
                            <div class="seat">E1</div>
                            <div class="seat">E2</div>
                            <div class="seat">E3</div>
                            <div class="seat sold">E4</div>
                            <div class="seat sold">E5</div>
                            <div class="seat">E6</div>
                            <div class="seat">E7</div>
                            <div class="seat">E8</div>
                            <div class="seat sold">E9</div>
                            <div class="seat">E10</div>
                            <div class="seat">E11</div>
                            <div class="seat">E12</div>
                        </div>
                        <div class="row ml-2">
                            <div class="seat">F1</div>
                            <div class="seat">F2</div>
                            <div class="seat">F3</div>
                            <div class="seat">F4</div>
                            <div class="seat sold">F5</div>
                            <div class="seat sold">F6</div>
                            <div class="seat sold">F7</div>
                            <div class="seat">F8</div>
                            <div class="seat sold">F9</div>
                            <div class="seat sold">F10</div>
                            <div class="seat sold">F11</div>
                            <div class="seat">F12</div>
                        </div>
                    </div>
                </div>

                <p class="text">
                    Kursi yang dipilih <span id="count">0</span> dengan total harga kursi yang sudah dipilih RP. <span
                        id="total">0</span>
                </p>
        </div>

        <a id="form-link" class="btn btn-custom" style="text-decoration:none;">
            <h4 class="mb-0">Lanjutkan</h4>
        </a>
        </form>
    </body>

    <footer class="bg-light text-center text-lg-start sticky-bottom">
        <div class="text-center p-3" style="background-color: #03213B; color:white; font-family:Marcellus SC;">
            Kelompok 11 © 2023 Copyright:
            <a class="text-white" href="https://github.com/VigoMade/UTSWeb_A_11.git">UTS Web A Kelompok 11</a>
        </div>
    </footer>
    <script src="{{ asset('js/seatBioskop.js') }}"></script>

    <script>
        const container = document.querySelector(".pembungkusSeat");
        const seats = document.querySelectorAll(".row .seat:not(.sold)");
        const count = document.getElementById("count");
        const total = document.getElementById("total");
        const movieSelect = document.getElementById("movie");

        populateUI();

        // let ticketPrice = +movieSelect.value;
        //nanti diganti menggunakan passing data melalui routes untuk 50000 nya
        let ticketPrice = +{{ $movieFind->harga }};

        // Save selected movie index and price
        function setMovieData(movieIndex, moviePrice) {
            localStorage.setItem("selectedMovieIndex", movieIndex);
            localStorage.setItem("selectedMoviePrice", moviePrice);
        }

        // Update total and count
        function updateSelectedCount() {
            const selectedSeats = document.querySelectorAll(".row .seat.selected");
            const seatsIndex = [...selectedSeats].map((seat) => seat.textContent);

            const selectedSeatsCount = selectedSeats.length;
            count.innerText = selectedSeatsCount;

            // Update hidden input value for selected seats
            document.getElementById("selected-seats").value = seatsIndex.join(",");

            // Calculate total payment and update the hidden input value
            const totalPayment = selectedSeatsCount * ticketPrice;
            total.innerText = totalPayment;
            document.getElementById("total-payment").value = totalPayment;

            // Update hidden input value for total selected seats
            document.getElementById("totalSeat").value = selectedSeatsCount;
        }


        // Get data from localstorage and populate UI
        function populateUI() {
            const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

            if (selectedSeats !== null && selectedSeats.length > 0) {
                seats.forEach((seat, index) => {
                    if (selectedSeats.indexOf(index) > -1) {
                        console.log(seat.classList.add("selected"));
                    }
                });
            }

            const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

            if (selectedMovieIndex !== null) {
                movieSelect.selectedIndex = selectedMovieIndex;
                console.log(selectedMovieIndex)
            }
        }
        console.log(populateUI())
        // Movie select event
        movieSelect.addEventListener("change", (e) => {
            ticketPrice = +e.target.value;
            setMovieData(e.target.selectedIndex, e.target.value);
            updateSelectedCount();
        });

        // Seat click event
        container.addEventListener("click", (e) => {
            if (
                e.target.classList.contains("seat") &&
                !e.target.classList.contains("sold")
            ) {
                e.target.classList.toggle("selected");

                updateSelectedCount();
            }
        });

        // Initial count and total set
        updateSelectedCount();

        document.getElementById('form-link').addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah perilaku bawaan dari tautan
            document.querySelector('form.submit').submit(); // Men-submit form
        });
    </script>
@endsection
