<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/appointment.css')); ?>">
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
                <a href="#" class="btn btn-primary">Jadwalkan Janji Temu</a>
                <button id="whatsappButton" class="btn btn-secondary">Jadwalkan Janji Temu Via WhatsApp</button>
                <button id="emailButton" class="btn btn-tertiary">Jadwalkan Janji Temu Via Email</button>
            </div>
        </div>
    </div>
</body>
<script>
    document.getElementById('whatsappButton').addEventListener('click', function() {
        var nama = "";
        var nik = "";
        var alamat = "";
        var noTelepon = "";
        var tanggal = "";
        var waktu = "";
        var catatan = "";

        var pesan = Halo, saya ingin menjadwalkan janji temu di KLINIK INSAN PERMATA.\n\nNama : ${nama}\nNIK: ${nik}\nAlamat: ${alamat}\nNo. Telepon: ${noTelepon}\nTanggal: ${tanggal}\nWaktu: ${waktu}\nCatatan: ${catatan};
        var pesanEncoded = encodeURIComponent(pesan);
        var nomorWhatsApp = '6281914882893';
        var url = https://wa.me/${nomorWhatsApp}?text=${pesanEncoded};
        window.location.href = url;
    });

    document.getElementById('emailButton').addEventListener('click', function() {
        var nama = "";
        var nik = "";
        var alamat = "";
        var noTelepon = "";
        var tanggal = "";
        var waktu = "";
        var catatan = "";

        var subject = encodeURIComponent('Jadwalkan Janji Temu di KLINIK INSAN PERMATA');
        var body = encodeURIComponent(Halo, saya ingin menjadwalkan janji temu di KLINIK INSAN PERMATA.\n\nNama : ${nama}\nNIK: ${nik}\nAlamat: ${alamat}\nNo. Telepon: ${noTelepon}\nTanggal: ${tanggal}\nWaktu: ${waktu}\nCatatan: ${catatan});
        var email = 'insanpermatak@gmail.com';
        var gmailLink = https://mail.google.com/mail/?view=cm&fs=1&to=${email}&su=${subject}&body=${body};
        window.location.href = gmailLink;
    });
</script>
</html>
<?php /**PATH D:\KLINIK INSAN PERMATA\1. FIX KLINIK WEB\Klinik_Insan_Permata\resources\views/appointment.blade.php ENDPATH**/ ?>