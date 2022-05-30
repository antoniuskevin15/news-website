<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include "include/bootstrapJsGlobal.php"; ?>
  <link rel="stylesheet" href="assets/css/navbarHome.css">
  <link rel="stylesheet" href="assets/css/categoryBar.css">
  <link rel="stylesheet" href="assets/css/newsContent.css">
  <link rel="stylesheet" href="assets/css/newsItems.css">
  <link rel="stylesheet" href="assets/css/newsFooter.css">
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">
  <title>News — Second News Media</title>
</head>

<body>
  <div class="container">
    <div class="row">

      <!-- News Content -->
      <div class="col-lg-12">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?view=home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $berita['kategori']; ?></li>
          </ol>
        </nav>
        <h2 class="content-title"><?= $berita['judul'] ?></h2>
      </div>
      <div class="col-lg-12">
        <img src="<?= $berita['imgresource'] ?>" alt="thumbail berita" class="content-image">
        <h4 class="published-date"><span class="category-name"><?= $berita['kategori'] ?></span> -
          <?= $berita['tanggalUpload'] ?> | <span class="writer">Penulis:
            <?= $berita['penulis'] ?></span></h4>
      </div>
      <div class="col-lg-7 news-content-wrapper">
        <p id="news-content" class="news-content"> <?= $berita['content'] ?></p>

        <div class="comment-wrapper">
          <h2 class="comment-header">Komentar</h2>
          <form id="comment-form" method="POST" action="?view=berita&id=<?= $idBerita?>">
            <div class="input-comment-wrapper">
              <textarea name="comment" id="comment" class="form-control input-comment" rows="5"
                placeholder="Ketik komentar anda disini..." required></textarea>
            </div>
            <div class="button-submit-wrapper">
              <input type="submit" name="submitComment" class="btn btn-primary btn-submit mt-4">
            </div>
          </form>

          <span class="hr-divider"></span>

          <!-- User comment -->
          <div class="container user-comment-wrapper">
            <div class="row">
              <?php
                foreach($komentar as $comment) {
                  $idKomentar = $comment['idKomentar'];
                  $result = $conn->query("SELECT COUNT(*) AS jumlahLike FROM likelist WHERE idKomentar = {$idKomentar}");
                  $jumlahLike = $result->fetch_assoc()['jumlahLike'];
                  $username = $comment['username'];
                  $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
                  $comment['fotoProfil'] = $result->fetch_assoc()['foto_profil']; 
                  

                  echo "
                    <div class=\"col-xl-1 col-lg-2 col-md-1 col-sm-2 col-2\">
                      <img src=\"img/{$comment['fotoProfil']}\" alt=\"user-profile\" class=\"user-image\">
                    </div>
                    <div class=\"col-xl-11 col-lg-10 col-md-11 col-sm-10 col-10\">
                      <h4 class=\"commenter-name\">{$comment['username']}</h4><span class=\"comment-date\">{$comment['tanggalKomentar']}</span>
                      <p class=\"comment-content\">{$comment['content']}</p>
                      <a href=\"?view=berita&id={$berita['id']}&target={$idKomentar}\">
                        <button type=\"button\" class=\"ld-button\"><img src=\"assets/images/like.png\" alt=\"like button\" title=\"Like\">{$jumlahLike}</button>
                      </a>
                    </div>
                  ";
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Divider between Content and Recommendation -->
      <div class="col-lg-1 divider-wrapper">
        <div class="divider"></div>
      </div>

      <!-- News Recommendation -->
      <div class="col-lg-4">
        <h2 class="recommendation-header">Rekomendasi</h2>

        <?php
        $counter = 0;

        foreach ($kumpulanBeritaPerKategori as $beritaPerKategori) {
          if ($counter++ == 5) break;
          else if ($beritaPerKategori['id'] == $_GET['id']) continue;

          echo "
              <a href=\"?view=berita&id={$beritaPerKategori['id']}\" class=\"recommendations\">
                <div data-aos=\"fade-left\" class=\"recommendation-item\">
                  <img src=\"{$beritaPerKategori['imgresource']}\" alt=\"thumbail berita\" class=\"recommendation-image\">
                  <div class=\"recommendation-title-wrapper\">
                    <h2 class=\"recommendation-title\">{$beritaPerKategori['judul']}</h2>
                  </div>
                </div>
              </a>
            ";
        }
        ?>

      </div>
    </div>

  </div>
  </div>

  <footer class="container-fluid footer-container">
    <div class="row">
      <h2 class="group-name">Kelompok 2 News Website</h2>
      <div class="col-xl-4 footer-title-wrapper">
        <a href="?view=home" class="footer-title">Second News Media</a>
      </div>
      <div class="col-xl-7 offset-xl-1 col-lg-12">
        <p class="campus-location">
          <img src="assets/images/location.png" alt="campuss address" class="location-icon"> Universitas Multimedia
          Nusantara. Jl. Scientia Boulevard, Gading Serpong Tangerang, Banten 15811
        </p>
        <p class="footer-description">Website ini dibuat oleh 4 orang yang mana setiap orang memiliki perannya
          masing-masing dalam proses pembuatan website ini. Untuk resources
          berita sendiri kami dapatkan dari website <a href="https://news.kompas.com/" class="ref-link">Kompas.com</a>
          dan <a href="https://www.cnnindonesia.com/" class="ref-link cnn">CNN Indonesia</a>. Untuk resources icon kami
          dapatkan dari <a href="https://icons8.com/" class="ref-link icon8">Icons8</a>. </p>
        <div class="social-media-wrapper">
          <div class="icon-wrapper">
            <a href="#" class="social-media-icon"><img src="assets/images/twitter.png" alt="our twitter"></a>
            <a href="#" class="social-media-icon"><img src="assets/images/facebook.png" alt="our facebook"></a>
            <a href="#" class="social-media-icon"><img src="assets/images/instagram.png" alt="our instagram"></a>
          </div>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12">
        <h4 class="footer-copyright">&copy; Copyright 2021 2nd Group - UMN Informatics Student - All rights reserved.
        </h4>
      </div>
    </div>
  </footer>

  <script src="assets/javascript/main.js"></script>
</body>

</html>