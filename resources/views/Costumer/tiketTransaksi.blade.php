@extends('navbarDashboard')

@section('content')
<style>
    body {

        background-color: #04192E;
    }
</style>

<body>
    <div class="container">
        @forelse($transaksis as $ticket)
        <div class="card mb-3" style="max-width: 100%;background-color: #06314C; ">
            <div class="row g-0">
                <div class="card-header" style="background-color: #03213B; color:white; font-size:20px">
                    <Strong>Ticket</Strong>
                </div>
                <div class="col-md-2" style="background-color: #04192E;">
                    <img src="/img/{{$ticket->movie->imageMovie}}" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class=" card-body" style="color:white;">
                        <h5 class="card-title">No Invoice : 1790128301218390{{$ticket->id}}</h5>
                        <p class="card-text mb-1">Nama Film : {{$ticket->movie->namaFilm}}</p>
                        <p class="card-text mb-1">Jam Tayang : {{$ticket->movie->jamTayang}}</p>
                        <p class="card-text mb-1">Tanggal Tayang : {{$ticket->movie->tanggalTayang}}</p>
                        <p class="card-text mb-1">Seat : {{$ticket->seat}}</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #CEA945; color:white">
                            QR Code
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <center>
            <div class="alert alert-danger mt-5">
                <p>Kamu Belum Memesan ticket apapun</p>
            </div>
        </center>
        @endforelse
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #06314C;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:white;">Scan This</h1>
                    <a type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: transparent;"><i class="fa-solid fa-x" style="color: #ffffff;"></i></a>
                </div>
                <div class="modal-body" style="background-color: #03213B; color:white;">
                    <img src=" {{asset('img/qr-code.png')}}" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</body>
@endsection