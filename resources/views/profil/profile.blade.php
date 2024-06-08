<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL ADMIN</title>
    <link href="{{ asset('css/profiladmin.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-cs">
    <!-- Memanggil Sidebar -->
    @include('layouts.sidebar')

    <div class="content">
        <div class="anakcontent">
            <div class="pr-adm">
                <h1>PROFIL ADMIN</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Informasi Pribadi</h3>
                            </div>
                            @forelse ($profile_admins as $data)
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <th>NIK</th>
                                        <td>{{ $data->nik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ $data->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $data->tempat_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $data->tanggal_lahir->format('d-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{ $data->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. Telp</th>
                                        <td>{{ $data->no_telp }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $data->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Tombol Edit -->
                            <div class="container">
                                <div class="d-flex">
                                    <div class="text-right flex-end">
                                             @csrf
                                        <a href="{{ route('profil.edit_profil', ['profile' => $data->nik]) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                                    <div class="alert alert-danger">
                                        Data Products belum Tersedia.
                                    </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
