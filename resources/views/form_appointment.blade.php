<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulir Janji Temu</title>
   <!-- CSS -->
      <link rel="stylesheet" href="{{ asset('css/formappointment.css') }}">
</head>
<body>
  <div class="container">
    <h1>Formulir Janji Temu</h1>
    <form>
    <form action="appointments.store" method="POST" >
      <div class="row">
        <div class="col-md-6">
          <label for="nama">Nama:</label>
          <input type="text" id="nama" name="nama" required>
        </div>
        <div class="col-md-6">
          <label for="nik">NIK:</label>
          <input type="text" id="nik" name="nik" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="col-md-6">
          <label for="jenis_kelamin">Jenis Kelamin:</label>
          <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="alamat">Alamat:</label>
          <textarea id="alamat" name="alamat" required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="tanggal">Tanggal:</label>
          <input type="date" id="tanggal" name="tanggal" required>
        </div>
        <div class="col-md-6">
          <label for="waktu">Waktu:</label>
          <input type="time" id="waktu" name="waktu" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="pesan">Pesan:</label>
          <textarea id="pesan" name="pesan"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
</html>
