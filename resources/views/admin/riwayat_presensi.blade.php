<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Presensi</title>
    <link rel="stylesheet" href="{{ asset('css/appointment.css') }}">
</head>
<body>
    <div class="container">
        <h1>Riwayat Presensi</h1>
        <table>
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Waktu Presensi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensis as $presensi)
                    <tr>
                        <td>{{ $presensi->nik }}</td>
                        <td>{{ $presensi->data_klien->nama }}</td>
                        <td>{{ $presensi->keterangan }}</td>
                        <td>{{ $presensi->created_at }}</td>
                    </tr>
                @endforeach4
            </tbody>
        </table>
    </div>
</body>
</html>
