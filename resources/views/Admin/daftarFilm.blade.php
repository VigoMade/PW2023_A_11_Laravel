@extends('navbarAdmin')
@section('content')
<style>
    body {
        background-color: #04192E;
        color: white;
    }

    .container {
        display: flex;
    }

    .box-icon {
        width: 50px;
        height: 50px;
        background: #06314C;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .text-sebelah-icon {
        margin-top: 10px;
        margin-left: 10px;
    }

    .pagination-prev,
    .pagination-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #CEA945;
        border: 2px solid #06314C;
        border-radius: 50%;
        padding: 8px;
        color: white;
        cursor: pointer;
        font-size: 20px;
    }

    .pagination-prev {
        left: 15px;
    }

    .pagination-next {
        right: -15px;
    }

    .isiTable tr:nth-child(even) {
        background-color: #135597;
    }

    .isiTable tr:nth-child(odd) {
        background-color: #014384;
    }

    .borderTable {
        border: 3px solid #06314C;
        width: 125%;
        height: auto;
        background-color: #06314C;
        border-radius: 20px;
        margin-left: 50px;
        overflow: auto;
    }

    .isiTable {
        width: 100%;
        height: auto;
        margin-top: 25px !important;
        margin-left: 40px !important;
        overflow: auto;
    }

    .tombol {
        position: absolute;
        top: 83px;
        right: 20px;
        width: 10%;
        background: #CEA945;
        border-radius: 20px;
        padding: 0px;
        color: white;
        font-size: 15px;
    }

    .edit-delete-column {
        width: 150px;
    }
</style>
<div class="container" style="margin-top: 80px; margin-left:20px;">
    <div class="box-icon" style="width: 50px; height: 50px; background: #06314C; border-radius: 20px">
        <iconify-icon icon="ic:outline-movie" width="30"></iconify-icon>
    </div>
    <div class="text-sebelah-icon">
        <h4>Daftar Film</h4>
    </div>
</div>

<div class="tombol">
    <a type="button" href="{{url('form')}}" style="display: flex; align-items: center; min-width: 120px; height: 50px; background:#CEA945; border-radius: 20px; margin-left:15px; text-decoration:none; color:white;">
        <iconify-icon icon="mdi:movie-plus-outline" width="30"></iconify-icon><strong>Tambah Film</strong>
    </a>
</div>



<div class="borderTable" style="border: 3px solid #06314C; width:98%; height:500px; background-color:#06314C;border-radius:20px; margin-left:30px; margin-top:10px; ">
    <table class="isiTable" style="width: 96%; height:300px; margin-top:50px; margin-left:20px;">
        <tr class="">
            <th>No</th>
            <th>Nama Film</th>
            <th>Genre</th>
            <th>Jam Tayang</th>
            <th>Jam Akhir</th>
            <th>Harga</th>
            <th>Tanggal Tayang</th>
            <th>Tanggal Akhir</th>
            <th>Sinopsis</th>
            <th>Aksi</th>
        </tr>
        @forelse($isi as $isian)
        <tr>
            <td>{{$isian['no']}}</td>
            <td><img src="{{$isian['gambar']}} " alt="" style="width: 20%;">{{$isian['nama']}}</td>
            <td>{{$isian['genre']}}</td>
            <td>{{$isian['JamTayang']}}</td>
            <td>{{$isian['JamAkhir']}}</td>
            <td>Rp. {{$isian['harga']}}</td>
            <td>{{$isian['TanggalTayang']}}</td>
            <td>{{$isian['TanggalAkhir']}}</td>
            <td>{!! nl2br($isian['Sinopsis']) !!}</td>
            <td class="edit-delete-column">
                <a href="{{url('form')}}" type="button" class="badge rounded-pill text-bg-warning text-white" style="text-decoration:none;">Edit</a>
                <button type="button" class="badge rounded-pill text-bg-danger text-white delete-button" id="presensiBtn{{$isian['no']}}">
                    Delete
                </button>
            </td>
            <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast{{$isian['no']}}" style="position: fixed; bottom: 10px; right: 10px;">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fa-solid fa-check" style="color: #ffffff;"></i> Berhasil Menghapus Film
                    </div>
                </div>
            </div>
        </tr>
        @empty
        <div class="alert alert-danger">
            Data Masih Kosong
        </div>
        @endforelse
        <div class="pagination mt-3 mb-3">
            <div class="kotak1" style="border:2px solid #06314C; background-color:#CEA945">
                @if ($isi->onFirstPage())
                <span class="pagination-prev disabled ml-2"><i class="fa fa-arrow-left"></i></span>
                @else
                <a href="{{ $isi->previousPageUrl() }}" class="pagination-prev ml-2"><i class="fa fa-arrow-left"></i></a>
                @endif
            </div>

            <div class="box2" style="border:2px solid #06314C; background-color:#CEA945">
                @if ($isi->hasMorePages())
                <a href="{{ $isi->nextPageUrl() }}" class="pagination-next ml-2"><i class="fa fa-arrow-right"></i></a>
                @else
                <span class="pagination-next disabled ml-2"><i class="fa fa-arrow-right"></i></span>
                @endif
            </div>


            <div class="pagination-info ml-6">
                Page {{ $isi->currentPage() }} of {{ $isi->lastPage() }}
            </div>
        </div>
    </table>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.isiTable').addEventListener('click', function(event) {
                if (event.target.classList.contains('delete-button')) {
                    let idNumber = event.target.id.replace('presensiBtn', '');
                    let toastId = 'liveToast' + idNumber;
                    showToast(toastId);
                }
            });
        });

        function showToast(toastId) {
            var toast = new bootstrap.Toast(document.getElementById(toastId));
            toast.show();
        }
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</div>
<footer class="bg-light text-center text-lg-start" style="margin-top:50px; width:100%;">
    <div class="text-center p-3" style="background-color: #03213B; color:white; font-family:Marcellus SC;">
        Kelompok 11 © 2023 Copyright:
        <a class="text-white" href="https://github.com/VigoMade/UTSWeb_A_11.git">UTS Web A Kelompok 11</a>
    </div>
</footer>
@endsection