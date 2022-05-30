<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include "include/bootstrapJsGlobal.php";?>
  <link rel="stylesheet" href="assets/css/register.css">
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">
  <title>Edit Berita</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="card w-100">
          <div class="card-body">
            <h1 class="header-title text-center mb-4">Edit Berita</h1>
            <p class="form-description text-center">
              Hi, Admin. Ganti isi form yang perlu di edit ya! Semangat revisinya!!
            </p>
            <form method="POST" action="" class="row g-3" enctype="multipart/form-data">
              <div class="col-lg-12 input-container">
                <label class="form-label" for="idBerita">ID</label>
                <input class="form-control" type="text" value="<?php echo $berita['id']?>" name="idBerita" id="idBerita" disabled>
                <input class="form-control" type="hidden" value="<?php echo $berita['id']?>" name="idBerita" id="idBerita">
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="penulis">Penulis</label>
                <input class="form-control" type="text" value="<?php echo $berita['penulis']?>" name="penulis" id="penulis" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="judul">Judul</label>
                <input class="form-control" type="text" value="<?php echo $berita['judul']?>" name="judul" id="judul" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="thumbnail">Thumbnail</label>
                <input class="form-control" type="text" value="<?php echo $berita['thumbnail']?>" name="thumbnail" id="thumbnail" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="linkImage">Gambar Berita (Link)</label>
                <input class="form-control" type="text" value="<?php echo $berita['imgresource']?>" name="linkImage"
                  id="linkImage" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="sourceBerita">Source Berita (Link)</label>
                <input class="form-control" type="text" value="<?php echo $berita['resourceBerita']?>" name="sourceBerita"
                  id="sourceBerita" required>
              </div>
              <div class="col-lg-6 input-container">
                <label for="kategori" class="form-label form-label-select">Kategori</label>
                <select id="kategori" class="form-select form-control" name="kategori" disabled>
                  <option class="form-select-option" selected disabled><?php echo $berita['kategori']?></option>
                </select>
                <input class="form-control" type="hidden" value="<?php echo $berita['kategori']?>" name="kategori" id="kategori">
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="tanggalUpload">Tanggal Upload</label>
                <input class="form-control" type="date" name="tanggalUpload" value="<?php echo $berita['tanggalUpload']?>" id="tanggalUpload" disabled>
                <input class="form-control" type="hidden" name="tanggalUpload" value="<?php echo $berita['tanggalUpload']?>" id="tanggalUpload">
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="tanggalEdit">Tanggal Edit</label>
                <input class="form-control" type="date" name="tanggalEdit" value="<?php echo $berita['lastedited']?>" id="tanggalEdit" required>
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="jamUpload">Jam Upload</label>
                <input class="form-control" type="time" name="jamUpload" value="<?php echo $berita['jamUpload']?>" id="jamUpload" disabled>
                <input class="form-control" type="hidden" name="jamUpload" value="<?php echo $berita['jamUpload']?>" id="jamUpload">
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="content">Isi Berita</label>
                <textarea name="content" id="content" rows="5" class="form-control insert-content" required><?php echo $berita['content']?>"</textarea>
              </div>
              <input type="submit" name="upload" class="btn btn-primary float-right">Edit</input>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</body>

</html>