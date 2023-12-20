@extends('navbarAdmin')
@section('content')
    <style>
        body {
            background-color: #04192E;
            color: white;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-top: 80px;
            margin-left: 20px;
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
            margin-right: 81%;
            margin-left: 10px;
        }

        .borderTable {
            border: 3px solid #06314C;
            width: 100%;
            background-color: #06314C;
            border-radius: 20px;
            margin-left: 20px;
            margin-top: 10px;
            overflow: auto;
        }

        .isiTable {
            width: 100%;
            margin-top: 25px !important;
            margin-left: 20px !important;
            overflow: auto;
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

        .edit-delete-column {
            width: 150px;
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

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .box-icon {
                margin-bottom: 20px;
            }

            .pagination-prev,
            .pagination-next {
                font-size: 16px;
            }
        }
    </style>
    <div class="container" style="margin-top: 80px; margin-left:20px;">
        <div class="box-icon" style="width: 50px; height: 50px; background: #06314C; border-radius: 20px">
            <iconify-icon icon="ph:user-bold" width="30"></iconify-icon>
        </div>
        <div class="text-sebelah-icon">
            <h4>User Control</h4>
        </div>
    </div>




    <div class="borderTable"
        style="border: 3px solid #06314C; width:98%; height:500px; background-color:#06314C;border-radius:20px; margin-left:30px; margin-top:10px; ">
        <table class="isiTable" style="width: 96%; height:300px; margin-top:50px; margin-left:20px;">
            <tr class="text-center">
                <th></th>
                <th style="width: 300px">UserName</th>
                <th>Name</th>
                <th>email</th>
                <th>Aksi</th>
            </tr>
            @forelse($user as $isian)
                <tr class="text-center">

                    @if ($isian->imgProfile == null)
                        <td> <img src="{{ asset('img/user2-160x160.jpg') }}" alt="Avatar" class="rounded-circle mr-3"
                                style="width: 32px; height: 32px;"></td>
                    @else
                        <td> <img src="/img/{{ $isian->imgProfile }}" alt="Avatar" class="rounded-circle mr-3"
                                style="width: 32px; height: 32px;"></td>
                    @endif

                    <td>{{ $isian->username }}</td>
                    <td>{{ $isian->nama }}</td>
                    <td>{{ $isian->email }}</td>
                    <td class="edit-delete-column">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('UserControl.destroy', $isian->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="badge rounded-pill text-bg-danger text-white delete-button"
                                id="presensiBtn{{ $isian->id }}">
                                Delete
                            </button>
                        </form>
                    </td>
                    <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
                        aria-atomic="true" id="liveToast{{ $isian->id }}"
                        style="position: fixed; bottom: 10px; right: 10px;">
                        <div class="d-flex">
                            <div class="toast-body">
                                <i class="fa-solid fa-check" style="color: #ffffff;"></i> Banned User
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
                    @if ($user->onFirstPage())
                        <span class="pagination-prev disabled ml-2"><i class="fa fa-arrow-left"></i></span>
                    @else
                        <a href="{{ $user->previousPageUrl() }}" class="pagination-prev ml-2"><i
                                class="fa fa-arrow-left"></i></a>
                    @endif
                </div>

                <div class="box2" style="border:2px solid #06314C; background-color:#CEA945">
                    @if ($user->hasMorePages())
                        <a href="{{ $user->nextPageUrl() }}" class="pagination-next ml-2"><i
                                class="fa fa-arrow-right"></i></a>
                    @else
                        <span class="pagination-next disabled ml-2"><i class="fa fa-arrow-right"></i></span>
                    @endif
                </div>


                <div class="pagination-info ml-6">
                    Page {{ $user->currentPage() }} of {{ $user->lastPage() }}
                </div>
            </div>
        </table>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('.isiTable').addEventListener('click', function(event) {
                    if (event.target.classList.contains('badge')) {
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
