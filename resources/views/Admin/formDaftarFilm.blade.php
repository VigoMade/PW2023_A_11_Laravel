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

    .kotak {
        background-color: #06314C;
        color: white;
        border: 3px solid black;
        width: 75%;
        margin-top: 10px;
        margin-left: 120px;
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 5px;
    }


    .icon-input-container {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .iconify-icon {
        margin-right: 10px;
    }

    .custom-file-upload {
        border: 2px solid #06314C;
        background-color: white;
        color: black;
        padding: 5px 10px;
        border-radius: 5px;
        width: 400px;
        cursor: pointer;
    }

    input[type="file"]+.custom-file-upload:hover {
        color: black;
        background-color: #E5E5E5;
    }

    input[type="time"]+.custom-file-upload:hover {
        color: black;
        background-color: #E5E5E5;
    }

    input[type="date"]+.custom-file-upload:hover {
        color: black;
        background-color: #E5E5E5;
    }

    .time-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .time-input-container {
        display: flex;
        align-items: center;
        margin-right: 20px;
        padding-bottom: 20px;
        font-size: 15px;
        margin-top: 10px;
    }
</style>

<div class="container" style="margin-top: 80px;">
    <div class="box-icon" style="width: 50px; height: 50px; background: #06314C; border-radius: 20px">
        <iconify-icon icon="clarity:form-line" width="30"></iconify-icon>
    </div>
    <div class="text-sebelah-icon">
        <h4>Form Film</h4>
    </div>
</div>

<div class="kotak">
    <form action="{{url('daftar')}}" class="submit">


        <div class="form-group">
            <label for="namafilm">Nama Film</label>
            <input type="text" name="namafilm" id="namafilm" size="30" placeholder="Masukan Nama Film" required>
        </div>
        <div>
            <label><strong>Genre</strong></label>
            <input style="margin-left:5px;" type="checkbox" name="action" id="action" value="action">
            <label for="action" style="margin-left:5px;">Action</label>
            <input style="margin-left:20px;" type="checkbox" name="SliceOfLife" id="SliceOfLife" value="SliceOfLife">
            <label for="SliceOfLife" style="margin-left:5px;">Slice Of Life</label>
            <input style="margin-left:20px;" type="checkbox" name="Sci-fi" id="Sci-fi" value="Sci-fi">
            <label for="Sci-fi" style="margin-left:5px;">Sci-fi</label>
            <input style="margin-left:20px;" type="checkbox" name="Horror" id="Horror" value="Horror">
            <label for="Horror" style="margin-left:5px;">Horror</label>
            <input style="margin-left:20px;" type="checkbox" name="Romance" id="Romance" value="Romance">
            <label for="Romance" style="margin-left:5px;">Romance</label>
        </div>
        <div class="form-group">
            <label for="poster">Gambar Poster</label>
            <div class="icon-input-container">
                <iconify-icon icon="mdi:images-outline" width="30"></iconify-icon>
                <input type="file" id="poster" name="poster" size="30" />
            </div>
        </div>

        <div class="time-container">
            <label><strong>Jam Tayang</strong></label>
            <div class="time-input-container">
                <iconify-icon icon="ph:clock" width="30"></iconify-icon>
                <input type="time" name="jamTayang" id="jamTayang" class="custom-file-upload" required>
            </div>

            <label><strong>Tanggal Tayang</strong></label>
            <div class="time-input-container">
                <iconify-icon icon="uiw:date" width="30"></iconify-icon>
                <input type="date" name="tanggalTayang" id="tanggalTayang" class="custom-file-upload" required>
            </div>
        </div>
        <div class="time-container">
            <label><strong>Jam Akhir</strong></label>
            <div class="time-input-container">
                <iconify-icon icon="ph:clock" width="30"></iconify-icon>
                <input type="time" name="jamAkhir" id="jamAkhir" class="custom-file-upload" required>
            </div>

            <label><strong>Tanggal Akhir</strong></label>
            <div class="time-input-container">
                <iconify-icon icon="uiw:date" width="30"></iconify-icon>
                <input type="date" name="tanggalAkhir" id="tanggalAkhir" class="custom-file-upload" required>
            </div>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" size="30" placeholder="Masukan Harga" required>
        </div>

        <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <textarea name="sinopsis" id="sinopsis" cols="10" rows="5" placeholder="Masukan Sinopsis .." required></textarea>
        </div>


        <center>
            <button type="submit" class="btn btn-primary">
                Save
            </button>
            <button type="button" class="btn btn-danger">
                Delete
            </button>
        </center>
    </form>



</div>


<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endsection