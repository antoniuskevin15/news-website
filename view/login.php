<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://www.google.com/recaptcha/api.js"></script>

  <!-- bootstrap js -->
  <?php include "include/bootstrapJsGlobal.php";?>
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/login.css">

  <title>Login — Second News Media</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 card-container">
        <div class="card w-100">
          <div class="card-body">
            <h1 class="header-title text-center mb-4">Login</h1>
            <h2 class="form-title text-center">Second News Media</h2>
            <p class="form-description text-center mt-2">
              Login untuk menggunakan fitur yang ada di website Second News Media.
            </p>
            <form method="POST" action="" id="loginForm">
              <div class="">
                <label class="form-label mt-4" for="username">Username/Email</label>
                <input class="form-control" type="text" placeholder="Masukkan Username/Email" name="username"
                  id="username">
              </div>
              <div class="">
                <label class="form-label mt-4" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
              </div>
              <div class="g-recaptcha" data-sitekey="6LeeVbkcAAAAAF5RYAWR4fURzdM_gTluRtD9kxL2"
                style="margin-top: 15px;"></div>
              <button name="submit" type="submit" class="btn btn-primary mt-4">Login</button>
              <a href="?view=home" class="link btn">Back</a>
            </form>
          </div>
          <a href="?view=register" class="link">Daftar sebagai pengguna baru?</a>
          <a href="?view=forgotPass" class="link">Lupa password?</a>
          <div class="form-hr">
            <span>Ketentuan</span>
          </div>
          <p class="form-footer">Dengan melakukan login ke website kami, berarti anda telah menyetujui bahwa data dan
            informasi yang anda masukkan akan digunakan untuk memberikan fitur yang dapat anda gunakan nantinya di
            website kami.</p>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>

  </div>
</body>

</html>