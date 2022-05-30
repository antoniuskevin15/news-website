<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include "include/bootstrapJsGlobal.php";?>
  <link rel="stylesheet" href="assets/css/forgotPass.css">
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">


  <title>Forgot Password — Second News Media</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 mt-6">
        <div class="card w-100">
          <div class="card-body">
            <h1 class="header-title text-center mt-4">Forgot Password</h1>
            <p class="form-description text-center">
              Masukkan data yang sesuai untuk melakukan penggantian password anda. Pastikan data yang dimasukkan sudah
              pernah terdaftar di website ini sebelumnya.
            </p>
            <form method="POST" class="row">
              <div class="col-lg-12">
                <label class="form-label mt-4" for="username">Username</label>
                <input class="form-control" type="text" placeholder="Masukkan Username" name="username" id="username">
              </div>
              <div class="col-lg-12">
                <label class="form-label mt-4" for="email">Email</label>
                <input class="form-control" type="text" placeholder="Masukkan Email" name="email" id="email">
              </div>
              <div class="col-lg-12 col-md-12">
                <label class="form-label mt-4" for="password">Password Baru</label>
                <input class="form-control" type="password" placeholder="Masukkan Password Baru" name="password"
                  id="password">
              </div>
              <div class="col-lg-12 col-md-12">
                <label class="form-label mt-4" for="confirmPassword">Konfirmasi Password</label>
                <input class="form-control" type="password" placeholder="Konfirmasi Password" name="confirmPassword"
                  id="confirmPassword">
              </div>
              <div class="col-lg-12">
                <button type="submit" name="submit" class="btn btn-primary mt-4 float-right">Ganti Password</button>
                <a href="?view=login" class="btn link">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-2"></div>
    </div>
  </div>
</body>

</html>