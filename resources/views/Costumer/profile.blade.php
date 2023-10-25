@extends('navbarDashboard')
@section ('content')

<style>
    body {
        background-color: #04192E;
        color: white;
    }

    .card{
        width : 500px;
        height : 500px;
        background-color: #04192E;
    }
    .profil{
        width : 500px;
        height : 500px;
    }
    .isi{
        background-color:#06314C;
        border-radius: 25px;
    }
    .gambar{
        width: 100px;
        height: 100px;
        border-radius: 100%;
    }

    .save{
        width: 100px;
        height: 40px
    }
    .pencil{
        width: 25px;
        height: 25px;
    }


</style>

<div class="container-fluid px-4 px-md-5 text-lg-start">
    <div class="row mt-5">
        <div class="col-lg-6 ">
            <div class="container-fluid  mt-4">
                <div class="container-fluid mt-2 isi" >
                    <div class="row mt-1">
                        <div class="col ms-2">
                            <h5>My Profile</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{url('img/user2-160x160.jpg')}}" class="gambar "alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col ms-3">
                            <h4>Hagai</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3 ms-3">
                            <p>Username</p>
                        </div>
                        <div class="col-2">
                            <p>:</p>
                        </div>
                        <div class="col-5">
                            <p>Hagai</p>
                        </div>
                        <div class="col-1">
                            <img src="{{url('img/icons8-pencil-50.png')}}"class="pencil" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-3 ms-3">
                            <p>Gender</p>
                        </div>
                        <div class="col-2">
                            <p>:</p>
                        </div>
                        <div class="col-5">
                            <p>Laki-Laki</p>
                        </div>
                        <div class="col-1">
                            <img src="{{url('img/icons8-pencil-50.png')}}"class="pencil" alt="">
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
                            <p>Jan-15-2023</p>
                        </div>
                        <div class="col-1">
                            <img src="{{url('img/icons8-pencil-50.png')}}"class="pencil" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-3 ms-3">
                            <p>Password</p>
                        </div>
                        <div class="col-2">
                            <p>:</p>
                        </div>
                        <div class="col-5">
                            <p>*******</p>
                        </div>
                        <div class="col-1">
                            <img src="{{url('img/icons8-pencil-50.png')}}"class="pencil" alt="">
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
                            <p>081375248313</p>
                        </div>
                        <div class="col-1">
                            <img src="{{url('img/icons8-pencil-50.png')}}"class="pencil" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary  mb-5 mt-3">Save</button>
                        </div>
                        <div class="col-6 text-start">
                            <button type="button" class="btn btn-danger  mb-5 mt-3">Cancel</button>
                        </div>
                    </div>
                  
                    

                </div>
            </div>
        
        </div>
        
        <div class="col-lg-6">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="card mb-5 mt-5 ">
                    <img src="{{url('img/office.png')}}" class="img-fluid" alt="">
                    <div class="card-body text-center" style="color:white;">
                        <h1 class="card-title">Hallo Hagai</h1>
                        <p class="card-text text-center">Pastikan Data Kamu Tidak Tersebar!</p>
                    </div>

                </div>
                
            </div>
            
        </div>
        

    </div>


</div>


@endsection