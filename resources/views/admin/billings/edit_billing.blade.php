<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Billing</title>
    <link href="{{ asset('css/adminform.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .form-control {
            padding: 15px;
            font-size: 1.1rem;
        }

        label {
            margin-bottom: 5px;
            margin-top: 15px;
            font-size: 1.1rem;
        }

        .btn-custom {
            background-color: #447abc;
            padding: 10px 20px;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
            border-radius: 5px;
        }

        .container-cs {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .content {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-body {
            padding: 30px;
        }

        .head-klien {
            font-size: 2rem;
            color: #fff;
        }

        .form-group input[type="radio"] {
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <div class="container-cs">

        {{-- <!--Import Sidebar-->
        @include('layouts.bar') --}}

        <div class="content">
            <div class="anakcontent">
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm rounded"
                                style="background-color: #7ea1cd; border-radius:10px;">
                                <div class="card-body">

                                    <div class="d-flex justify-content-center pt-5 mt-1 mb-4">
                                        <h1 class="head-klien fs-2 fw-bold">
                                            EDIT BILLING
                                        </h1>
                                    </div>
                                    <form action="{{ route('admin.billings.proses_edit', $billing->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <!-- Hidden Input for Uneditable Fields -->
                                            <input type="hidden" name="nik" value="{{ $billing->dataKlien->nik }}">
                                            <input type="hidden" name="nama_wali" value="{{ $billing->dataKlien->nama_wali }}">
                                            <input type="hidden" name="alamat" value="{{ $billing->dataKlien->alamat }}">
                                            <input type="hidden" name="no_telepon" value="{{ $billing->dataKlien->no_telepon }}">
                                            <input type="hidden" name="paket" value="{{ $billing->dataKlien->paket }}">
                                            <input type="hidden" name="jenis_kelamin" value="{{ $billing->dataKlien->jenis_kelamin }}">
                                        </div>
                                        <div class="row">
                                            <!-- Is Active -->
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label class="font-weight-bold">Is Active</label><br>
                                                    <input type="radio" name="is_active" value="Aktif" {{ $billing->is_active == 'Aktif' ? 'checked' : '' }}> Aktif<br>
                                                    <input type="radio" name="is_active" value="Tidak Aktif" {{ $billing->is_active == 'Tidak Aktif' ? 'checked' : '' }}> Tidak Aktif
                                                </div>
                                            </div>

                                            <!-- Bill Status -->
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label class="font-weight-bold">Bill Status</label><br>
                                                    <input type="radio" name="bill_status" value="Sudah Bayar" {{ $billing->bill_status == 'Sudah Bayar' ? 'checked' : '' }}> Sudah Bayar<br>
                                                    <input type="radio" name="bill_status" value="Belum Bayar" {{ $billing->bill_status == 'Belum Bayar' ? 'checked' : '' }}> Belum Bayar
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex container mt-3 pb-4 justify-content-end">
                                            <button type="submit" class="btn btn-lg btn-custom">SIMPAN</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
