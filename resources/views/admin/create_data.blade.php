<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Form Klien </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-control {
            padding: 15px;
        }
        label {
            margin-bottom: 5px;
            margin-top: 15px;
        }
        .btn-custom {
            background-color:  #447abc;
            padding: 10px;
            color: white;
            font-weight: 600;
        }
    </style>
</head>
<body style="background: lightgray">



    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded" style="background-color:  #7ea1cd; border-radius:10px;">
                    <div class="card-body" >

                        <div class="d-flex justify-content-center pt-5 mt-1 mb-4">
                            <h1 class="head-klien fs-2 fw-bold">
                                FORMULIR KLIEN
                            </h1>
                        </div>
                        <form action="{{ route('admin.store') }}" method="POST" >

                            @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">

                                    <!-- error message untuk title -->
                                    @error('nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Nama Wali</label>
                                    <input type="text" class="form-control @error('nama_wali') is-invalid @enderror" name="nama_wali" value="{{ old('nama_wali') }}" placeholder="Masukkan Nama Wali">

                                    <!-- error message untuk title -->
                                    @error('nama_wali')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Alamat</label>
                                    <input  type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat Anda"></input>

                                    <!-- error message untuk description -->
                                    @error('alamat')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">No telepon</label>
                                    <input  type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" placeholder="Masukkan No Telepon Anda"></input>

                                    <!-- error message untuk description -->
                                    @error('no_telepon')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Paket</label>
                                <select class="form-control @error('paket') is-invalid @enderror" name="paket" value="{{ old('paket') }}">
                                    <option disabled>Pilih Paket Anda</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <!-- error message untuk description -->
                                @error('paket')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Kelamin</label>
                                <select class="form-control  @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                                    <option disabled>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <!-- error message untuk description -->
                                @error('jenis_kelmain')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                    </div>


                        <div class="d-flex container mt-3 pb-4 justify-content-end">
                                <button type="submit" class="btn btn-lg btn-custom">SIMPAN</button>
                            {{-- <button type="reset" class="btn btn-md btn-warning">RESET</button> --}}
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    {{-- <script>
        CKEDITOR.replace( 'description' );
    </script> --}}
</body>
</html>
