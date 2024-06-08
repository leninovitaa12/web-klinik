<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link rel="stylesheet" href="{{ asset('css/appointment.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>INSAN PERMATA</h1>
            <p>Insan Mandiri Cahaya Masa Depan</p>
        </div>
        <div class="main-content">
            <h2>Halo.. Kami Siap Melayani!!</h2>
            <p>Dengan mengisi formulir janji temu ini, Anda akan mengefektifkan waktu Anda saat berkunjung ke Klinik Insan Permata.</p>
            <div class="button-group">
                <a href="formappointment" class="btn btn-primary">Jadwalkan Janji Temu</a>

                <button id="whatsappButton" class="btn btn-secondary">Jadwalkan Janji Temu Via WhatsApp</button>
             <!-- <button class="btn btn-secondary">Jadwalkan Janji Temu Via WhatsApp</button> -->
            </div>
        </div>
    </div>
</body>
<script>
        document.getElementById('whatsappButton').addEventListener('click', function() {
            // Data yang ingin dikirim ke WhatsApp
            var nama = "";
            var nik = "";
            var alamat = "";
            var noTelepon = "";
            var tanggal = "";
            var waktu = "";
            var catatan = "";

            // Pesan yang akan dikirim
            var pesan = Halo, saya ingin menjadwalkan Janji Temu di KLINIK INSAN PERMATA.\n\nNama : ${nama}\nNIK: ${nik}\nAlamat: ${alamat}\nNo. Telepon: ${noTelepon}\nTanggal: ${tanggal}\nWaktu: ${waktu}\nCatatan: ${catatan};

            // Encode pesan untuk URL
            var pesanEncoded = encodeURIComponent(pesan);

            // Nomor WhatsApp tujuan (format internasional, tanpa tanda +)
            var nomorWhatsApp = '6281914882893';

            // URL WhatsApp
            var url = https://wa.me/${nomorWhatsApp}?text=${pesanEncoded};

            // Arahkan pengguna ke WhatsApp
            window.location.href = url;
        });
    </script>
</body>
</html>
