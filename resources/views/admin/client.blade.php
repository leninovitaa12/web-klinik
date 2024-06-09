<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Klien</title>
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="container-cs">
        <!--Import Sidebar-->
        @include('layouts.bar')
        <!-- CONTENT -->
        <section id="content">
            <nav>
                <i class='bx bx-menu'></i>
                <a href="#" class="nav-link">Categories</a>
            </nav>
            <div class="content">
                <div class="anakcontent">
                    <div style="margin-top: 50px;"></div>
                    <div style="background-color: #475ffd; width:40%; margin:auto; padding: 20px 40px; border-radius: 10px;">
                        <h1 style="text-align: center; font-weight:bold; color:black;">Data Klien</h1>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">Cari :</h5>
                            <input type="text" placeholder="Cari Klien..." style="margin-left:5px; border-radius:10px;">
                        </div>
                        <a class="btn btn-custom" style="background-color: #447abc; padding: 10px; color: white; font-weight: 600;" href="{{ route('admin.create') }}">Tambah</a>
                        <button class="btn btn-tambah"></button>
                    </div>
                    <table class="table-klien">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Nama Wali</th>
                                <th>Alamat</th>
                                <th>No.Telepon</th>
                                <th>Paket</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data_kliens as $dataklien)
                            <tr>
                                <td>{{ $dataklien->nik }}</td>
                                <td>{{ $dataklien->nama }}</td>
                                <td>{{ $dataklien->nama_wali }}</td>
                                <td>{{ $dataklien->alamat }}</td>
                                <td>{{ $dataklien->no_telepon }}</td>
                                <td>{{ $dataklien->paket }}</td>
                                <td>{{ $dataklien->jenis_kelamin }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.destroy', $dataklien->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">
                                    <div class="alert alert-danger">
                                        Data Klien belum Tersedia.
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $data_kliens->links() }}
                </div>
            </div>
        </section>
        <script>
            @if(session('success'))
                Swal.fire({
                    icon: "success",
                    title: "BERHASIL",
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 2000
                });
            @elseif(session('error'))
                Swal.fire({
                    icon: "error",
                    title: "GAGAL!",
                    text: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 2000
                });
            @endif
        </script>
    </body>
</html>
