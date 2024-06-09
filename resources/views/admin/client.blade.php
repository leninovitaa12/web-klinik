<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboar Klien</title>
        <link href="{{ asset('css/client.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

            <!-- Boxicons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <!-- My CSS -->

    </head>
    <body>

        <div class="container-cs">

            <!--Import Sidebar-->
            @include('layouts.bar')

            <!-- CONTENT -->
	        <section id="content">
		        <!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Data Client</a>
		</nav>
            <div class="content">
                <div class="anakcontent">
                    <div style="display: flex; justify-content: space-between; height:45px; margin-top: 50px;">
                        <a class="btn btn-custom fs-6 " style="background-color:  #447abc;  padding: 10px;
                        color: white; " href="{{ route('admin.create') }}"><i class="bi bi-file-plus"></i> Tambah</a>
                    </div>

                <table class="table-klien">
                    <thead class="text-white">
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Nama Wali</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Paket</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Menggunakan fungsi forelse untuk mengambil data dari data klien --}}
                        @forelse ($data_kliens as $dataklien)
                        <tr>
                            {{-- dataklien menjadi variabel baru --}}
                            <td>{{$dataklien->nama}}</td>
                            <td>{{$dataklien->nik}}</td>
                            {{-- mengambil nama dari dataklien --}}
                            <td>{{$dataklien->nama_wali}}</td>
                            <td>{{$dataklien->alamat}}</td>
                            <td>{{$dataklien->no_telepon}}</td>
                            <td>{{$dataklien->paket}}</td>
                            <td>{{$dataklien->jenis_kelamin}}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.destroy', $dataklien->id) }}" method="POST">
                                    <a href="{{ route('admin.edit', $dataklien->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                        <!-- Isi data lainnya di sini -->
                        @empty
                        <!-- Tampilkan pesan jika tidak ada data -->
                        <tr>
                            <td colspan="7" class="text-center">
                                <div class="alert alert-danger">
                                    Data Klien belum Tersedia.
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- buat Paginasi jika data lebih dari 10 --}}
                {{ $data_kliens->links() }}
                </div>
            </div>
        </div>

        <script>
            //message with sweetalert
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
