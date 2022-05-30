<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include "include/bootstrapJsGlobal.php";?>
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/register.css">

  <title>Register — Second News Media</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="card w-100">
          <div class="card-body">
            <h1 class="header-title text-center mb-4">Register</h1>
            <p class="form-description text-center">
              Daftar untuk dapat menggunakan layanan dan fitur-fitur yang tersedia hanya untuk pengguna yang sudah
              mendaftar ke Second News Media.
            </p>
            <form method="POST" action="" class="row g-3" enctype="multipart/form-data">
              <div class="col-lg-6 input-container">
                <label class="form-label" for="namaDepan">Nama Depan</label>
                <input class="form-control" type="text" placeholder="John" name="namaDepan" id="namaDepan">
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="namaBelakang">Nama Belakang</label>
                <input class="form-control" type="text" placeholder="Doe" name="namaBelakang" id="namaBelakang">
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="userName">Username</label>
                <input class="form-control" type="text" placeholder="John Doe" name="userName" id="userName">
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" placeholder="example@email.com" name="email" id="email">
              </div>
              <div class="col-lg-6 input-container">
                <label for="jenisKelamin" class="form-label form-label-select">Jenis Kelamin</label>
                <select id="jenisKelamin" class="form-select form-control" name="jenisKelamin">
                  <option value="" class="form-select-option" hidden selected></option>
                  <option value="pria" class="form-select-option">Pria</option>
                  <option value="wanita" class="form-select-option">Wanita</option>
                </select>
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="tanggalLahir">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggalLahir" id="tanggalLahir">
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="konfirmasiPassword">Konfirmasi Password</label>
                <input class="form-control" type="password" name="konfirmasiPassword" id="konfirmasiPassword">
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="gambar">Foto Profil</label>
                <input class="form-control form-control-file" type="file" name="gambar" id="gambar">
              </div>
              <button type="submit" name="submit" class="btn btn-primary float-right">Daftar</button>
            </form>
          </div>
          <a href="?view=login" class="link text-center">Sudah punya akun?</a>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</body>

</html>