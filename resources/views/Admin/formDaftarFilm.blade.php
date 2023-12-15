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
        border: 3px solid transparent;
        width: 75%;
        margin-top: 10px;
        margin-left: 190px;
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


<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endsection