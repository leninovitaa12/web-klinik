<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billing Client</title>
    <link href="#" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- My CSS -->

</head>

<body>

    <div class="d-flex">
        @include('layouts.bar')

        <div class="container" style="width: 75%; margin-left:24%;">
            <h1 class="mt-5">Billing Clients</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>nik</th>
                        <th>Paket</th>
                        <th>Nominal</th>
                        <th>Is Active</th>
                        <th>Bill</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($billings as $client)
                        <tr>
                            <td>{{ $client->dataKlien->nama }}</td>
                            <td>{{ $client->dataKlien->nik }}</td>
                            <td>{{ $client->dataKlien->paket }}</td>
                            <td>
                                @php
                                    switch ($client->dataKlien->paket) {
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
                            <td>{{ $client->is_active}}</td>
                            <td>{{ $client->bill_status}}</td>
                            <td>
                                <a href="https://wa.me/{{ $client->dataKlien->phone }}" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="{{ route('admin.billings.edit', $client->id) }}" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--Import Sidebar-->

</body>

</html>
