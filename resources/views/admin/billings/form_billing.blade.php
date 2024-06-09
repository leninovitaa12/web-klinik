<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Billing</title>
        <link href="#" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

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

    <body>

        <!-- resources/views/admin/billings/index.blade.php -->
            <!--Import Sidebar-->
            @include('layouts.bar')

            @section('content')
            <div class="container">
                <h1>Billing Clients</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Paket</th>
                            <th>Nominal</th>
                            <th>Is Active</th>
                            <th>Bill</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($billings as $client)
                            @foreach($client->billings as $billing)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $billing->package }}</td>
                                    <td>
                                        @php
                                            switch ($billing->package) {
                                                case 1:
                                                    $nominal = 100000;
                                                    break;
                                                case 2:
                                                    $nominal = 90000;
                                                    break;
                                                case 3:
                                                    $nominal = 70000;
                                                    break;
                                                case 4:
                                                    $nominal = 100000;
                                                    break;
                                                default:
                                                    $nominal = 0;
                                            }
                                        @endphp
                                        Rp. {{ number_format($nominal, 0, ',', '.') }}
                                    </td>
                                    <td>{{ $client->is_active ? 'Aktif' : 'Tidak Aktif' }}</td>
                                    <td>{{ $billing->bill_status ? 'Sudah Bayar' : 'Belum Bayar' }}</td>
                                    <td>
                                        <a href="https://wa.me/{{ $client->phone }}" class="btn btn-success"><i class="fa fa-whatsapp"></i></a>
                                        <a href="{{ route('admin.billings.show', $billing->id) }}" class="btn btn-primary"><i class="fa fa-info-circle"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endsection


    </body>
</html>
