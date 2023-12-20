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
    </style>

    <div class="container" style="margin-top: 80px;">
        <div class="box-icon" style="width: 50px; height: 50px; background: #06314C; border-radius: 20px">
            <iconify-icon icon="clarity:form-line" width="30"></iconify-icon>
        </div>
        <div class="text-sebelah-icon">
            <h4>Form Film</h4>
        </div>
    </div>
    <div class="container-fluid" style="background-color: transparent; margin-top:1%; width:90%">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: #06314C; color:white">
                    <div class="card-body">
                        <form action="{{ route('Admin.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Nama Film</label>
                                    <input type="text" class="form-control @error('namaFilm') is-invalid @enderror"
                                        name="namaFilm" value="{{ old('namaFilm', $movie->namaFilm) }}"
                                        placeholder="Masukkan Nama Film">
                                    @error('namaFilm')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weight-bold">Genre</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genre" value="Action"
                                            id="actionRadio">
                                        <label class="form-check-label" for="actionRadio">
                                            Action
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genre" value="Slice Of Life"
                                            id="sliceOfLifeRadio">
                                        <label class="form-check-label" for="sliceOfLifeRadio">
                                            Slice Of Life
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genre" value="Sci-fi"
                                            id="sciFiRadio">
                                        <label class="form-check-label" for="sciFiRadio">
                                            Sci-fi
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genre" value="Horror"
                                            id="horrorRadio">
                                        <label class="form-check-label" for="horrorRadio">
                                            Horror
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genre" value="Romance"
                                            id="romanceRadio">
                                        <label class="form-check-label" for="romanceRadio">
                                            Romance
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Gambar Poster</label>
                                    <i class="fa-solid fa-image"></i> <input type="file"
                                        class="form-control @error('imageMovie') is-invalid @enderror" name="imageMovie"
                                        value="{{ old('imageMovie') }}">
                                    @error('imageMovie')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weightbold">Jam Tayang</label>
                                    <input type="time" class="form-control @error('jamTayang') is-invalid @enderror"
                                        name="jamTayang" value="{{ old('jamTayang', $movie->jamTayang) }}">
                                    @error('jamTayang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weightbold">Tanggal Tayang</label>
                                    <input type="date" class="form-control @error('tanggalTayang') is-invalid @enderror"
                                        name="tanggalTayang" value="{{ old('tanggalTayang', $movie->tanggalTayang) }}">
                                    @error('tanggalTayang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weightbold">Jam Akhir</label>
                                    <input type="time" class="form-control @error('jamAkhir') is-invalid @enderror"
                                        name="jamAkhir" value="{{ old('jamAkhir', $movie->jamAkhir) }}">
                                    @error('jamAkhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weightbold">Tanggal Akhir</label>
                                    <input type="date" class="form-control @error('tanggalAkhir') is-invalid @enderror"
                                        name="tanggalAkhir" value="{{ old('tanggalAkhir', $movie->tanggalAkhir) }}">
                                    @error('tanggalAkhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Harga</label>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga" value="{{ old('harga', $movie->harga) }}">
                                    @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weight-bold">Sinopsis</label>
                                    <textarea class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" rows="5">{{ old('sinopsis', $movie->sinopsis) }}</textarea>
                                    @error('sinopsis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endsection
