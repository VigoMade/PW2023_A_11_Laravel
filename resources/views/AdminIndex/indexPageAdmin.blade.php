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


    .scrollable-content {
        margin-top: 10px;
        max-height: 300px;
        overflow: auto;
    }


    .pagination-prev,
    .pagination-next {
        position: absolute;
        top: 75%;
        transform: translateY(-50%);
        background-color: #CEA945;
        border: 2px solid #06314C;
        border-radius: 50%;
        padding: 8px;
        color: white;
        cursor: pointer;
    }

    .pagination-prev {
        left: 10px;
    }

    .pagination-next {
        right: 10px;
    }


    .isiTable tr:nth-child(even) {
        background-color: #135597;
    }

    .isiTable tr:nth-child(odd) {
        background-color: #014384;
    }
</style>
<div class="container" style="margin-top: 80px;">
    <div class="box-icon" style="width: 50px; height: 50px; background: #06314C; border-radius: 20px">
        <iconify-icon icon="material-symbols:data-usage" style="color: white;" width="30" height="30"></iconify-icon>
    </div>
    <div class="text-sebelah-icon">
        <h4>Analisis</h4>
    </div>
</div>

<div class="row align-items-center mt-3 scrollable-content">
    <!-- Colom 1 -->
    <div class="cardVisit col-md-3 col-sm-6" style="margin-left:7%; width:450px;">
        <div class="card p-0 mx-3" style="background-color:#06314C">
            <div class="card-body">
                <div class="d-flex" style="color:white;">
                    <iconify-icon icon="carbon:user-filled" style="color: white;" width="125"></iconify-icon></iconify-icon>
                    <div class="text-start" style="margin-top:30px;">
                        <p style="font-size:20px;" class="m-0">Total User</p>
                        <h2>{{$totalUsers}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Colom 2 -->
    <div class="cardVisit col-md-3 col-sm-6" style="margin-left:50px;width:450px;">
        <div class="card p-0 mx-3" style="background-color:#06314C">
            <div class="card-body">
                <div class="d-flex" style="color:white;">
                    <iconify-icon icon="ic:outline-attach-money" style="color: white;" width="125"></iconify-icon>
                    <div class="text-start" style="margin-top:30px;">
                        <p style="font-size:20px;" class="m-0">Total Sales</p>
                        <h2>Rp. {{$totalBayar}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Colom 3 -->
    <div class="cardVisit col-md-3 col-sm-6" style="margin-left:50px;width:450px;">
        <div class="card p-0 mx-3" style="background-color:#06314C">
            <div class="card-body">
                <div class="d-flex" style="color:white">
                    <iconify-icon icon="mdi:chart-bell-curve-cumulative" style="color: white;" width="125"></iconify-icon>
                    <div class="text-start" style="margin-top:30px;">
                        <p style="font-size:20px;" class="m-0">Total Transaksi</p>
                        <h2>{{$totalTransaksis}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
</div>

<legend>
    <div class="container scrollable-content">
        <div class="box-icon" style="width: 50px; height: 50px; background: #06314C; border-radius: 20px">
            <iconify-icon icon="ph:user-bold" style="color: white;" width="40"></iconify-icon>
        </div>
        <div class="text-sebelah-icon">
            <h4> Data Transaksi Terbaru</h4>
        </div>
    </div>
</legend>

<div class="borderTable" style="border: 3px solid #06314C; width:91%; height:400px; background-color:#06314C;border-radius:20px; margin-left:65px; ">
    <table class="isiTable" style="width: 90%; height:300px; margin-top:20px; margin-left:50px;">
        <tr>
            <th>No Invoice</th>
            <th>film</th>
            <th>seat</th>
            <th>Total Pembayaran</th>
            <th>Status</th>
        </tr>
        @forelse($transaksis as $isian)
        <tr>
            <td>1790128301218390{{$isian->id}}</td>
            <td>{{$isian->movie->namaFilm}}</td>
            <td>{{$isian->seat}}</td>
            <td>Rp. {{$isian->totBayar}}</td>
            <td>
                <span class="badge rounded-pill text-bg-info text-white" style="font-size: 1.2rem; padding: 0.5rem 1rem;">Selesai</span>
            </td>
        </tr>
        @empty
        <div class="alert alert-danger">
            Data Masih Kosong
        </div>
        @endforelse

    </table>
    <div class="pagination mt-3 mb-3">
        <div class="kotak1" style="border:2px solid #06314C; background-color:#CEA945">
            @if ($transaksis->onFirstPage())
            <span class="pagination-prev disabled ml-2"><i class="fa fa-arrow-left"></i></span>
            @else
            <a href="{{ $transaksis->previousPageUrl() }}" class="pagination-prev ml-2"><i class="fa fa-arrow-left"></i></a>
            @endif
        </div>

        <div class="box2" style="border:2px solid #06314C; background-color:#CEA945">
            @if ($transaksis->hasMorePages())
            <a href="{{ $transaksis->nextPageUrl() }}" class="pagination-next ml-2"><i class="fa fa-arrow-right"></i></a>
            @else
            <span class="pagination-next disabled ml-2"><i class="fa fa-arrow-right"></i></span>
            @endif
        </div>
        <div class="pagination-info ml-6">
            Page {{ $transaksis->currentPage() }} of {{ $transaksis->lastPage() }}
        </div>
    </div>
</div>


<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

@endsection