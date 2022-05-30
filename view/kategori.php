<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include "include/bootstrapJsGlobal.php"; ?>
  <link rel="stylesheet" href="assets/css/navbarHome.css">
  <link rel="stylesheet" href="assets/css/categoryBar.css">
  <link rel="stylesheet" href="assets/css/newsItems.css">
  <link rel="stylesheet" href="assets/css/newsFooter.css">
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">
  <title><?php echo "$category"; ?> — Second News Media</title>
</head>

<body>
  <div class="container subnews-container">
    <div class="row">
      <?php
      echo "<h2 class=\"subnews-header\">Berita {$category}</h2>";

      foreach ($result as $berita) {
        echo  "<div class=\"col-lg-6 subnews-parent\">
                  <a href=\"?view=berita&id={$berita['id']}\" class=\"subnews\">
                    <div data-aos=\"zoom-in\" class=\"subnews-wrapper\">
                      <img class=\"subnews-image\" src=\"{$berita['imgresource']}\" alt=\"subnews image for today\">
                      <div class=\"subnews-title-wrapper\">
                          <h2 class=\"subnews-title\">{$berita['judul']}</h2>
                      </div>
                    </div>
                  </a>
                    <h4 class=\"published-date\"><span class=\"category-name\">{$berita['kategori']}</span> - {$berita['tanggalUpload']}</h4>
                </div>";
      };
      ?>
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