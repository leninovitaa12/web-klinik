<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('css/presensi.css') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- My CSS -->
    <style>

    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <!--Import Sidebar-->
        @include('layouts.bar')

        <!-- Main Content -->
        <div id="content">

            <nav>
                <i class='bx bx-menu'></i>
                <a href="#" class="nav-link">Categories</a>

            </nav>
            <!-- NAVBAR -->

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Dashboard</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li><i class='bx bx-chevron-right'></i></li>
                            <li>
                                <a class="active" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>

        </div>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Presensi</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Presensi</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                    </ul>
                </div>
            </div>

    </div>

    <div id="page-kehadiran" class="page">
        <h2 style="text-align: center;">PRESENSI CLIENT</h2>
        <div class="main">
            <table id="riwayatTable">
                <thead>
                    <tr>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Paket</th>
                        <th>Jenis Kelamin</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="riwayatTableBody">
                    <!-- Data riwayat kehadiran akan dimasukkan di sini -->
                    @foreach ($presensi as $client)
                        <tr>
                            <td>{{ $client->dataKlien->nik }}</td>
                            <td>{{ $client->dataKlien->nama }}</td>
                            <td>{{ $client->dataKlien->alamat }}</td>
                            <td>{{ $client->dataKlien->no_telepon }}</td>
                            <td>{{ $client->dataKlien->paket }}</td>
                            <td>{{ $client->dataKlien->jenis_kelamin }}</td>
                            <td class="radio-container">
                                <label><input type="radio" name="sakit" value="sakit"> Sakit</label>
                                <label><input type="radio" name="izin" value="izin"> Izin</label>
                                <label><input type="radio" name="hadir" value="hadir">Hadir</label>
                            </td>
                            <td class="action-buttons">
                                <button onclick="submitAction(1)">Submit</button>

                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    <!-- Script for actions -->
    <script>
        function submitAction(rowId) {
            // Lakukan aksi submit sesuai dengan data baris yang dipilih
            alert("Data pada baris ke-" + rowId + " telah disubmit!");
            // Redirect ke halaman billing
            window.location.href = "billing";
        }



        // Script to handle navigation
        const navItems = document.querySelectorAll('.navigation ul li');
        const pages = document.querySelectorAll('.page');

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                // Remove active class from all pages
                pages.forEach(page => page.classList.remove('active'));

                // Add active class to the corresponding page
                const pageId = item.id.replace('nav-', 'page-');
                document.getElementById(pageId).classList.add('active');
            });
        });
    </script>
</body>

</html>
