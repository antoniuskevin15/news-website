<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include "include/bootstrapJsGlobal.php";?>
  <link rel="stylesheet" href="assets/css/register.css">
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">
  <title>Hi, Admin — Insert Berita Disini</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="card w-100">
          <div class="card-body">
            <h1 class="header-title text-center mb-4">Insert Berita Baru</h1>
            <p class="form-description text-center">
              Hi, Admin. Isi semua form yang ada pada halaman ini untuk menambahkan berita baru. Ingat, jangan sampe
              salah masukin berita, nanti bisa bahaya, hahaha.
            </p>
            <form method="POST" action="" class="row g-3">
              <div class="col-lg-12 input-container">
                <label class="form-label" for="idBerita">ID</label>
                <input class="form-control" type="text" placeholder="ID Berita" name="idBerita" id="idBerita" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="penulis">Penulis</label>
                <input class="form-control" type="text" placeholder="Bill Gates" name="penulis" id="penulis" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="judul">Judul</label>
                <input class="form-control" type="text" placeholder="Ayah Mengapa Aku Berbeda" name="judul" id="judul"
                  required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="linkImage">Gambar Berita (Link)</label>
                <input class="form-control" type="text" placeholder="www.apagitu.com/image/nya.png" name="linkImage"
                  id="linkImage" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="sourceBerita">Source Berita (Link)</label>
                <input class="form-control" type="text" placeholder="www.sumberberita.com/dari/mana" name="sourceBerita"
                  id="sourceBerita" required>
              </div>
              <div class="col-lg-6 input-container">
                <label for="jenisKelamin" class="form-label form-label-select">Kategori</label>
                <select id="jenisKelamin" class="form-select form-control" name="kategori" required>
                  <option value="" class="form-select-option" selected disabled>Pilih Kategori</option>
                  <option value="Nasional" class="form-select-option">Nasional</option>
                  <option value="Internasional" class="form-select-option">Internasional</option>
                  <option value="Politik" class="form-select-option">Politik</option>
                  <option value="Ekonomi" class="form-select-option">Ekonomi</option>
                  <option value="Edukasi" class="form-select-option">Edukasi</option>
                  <option value="Teknologi" class="form-select-option">Teknologi</option>
                  <option value="Sports" class="form-select-option">Sports</option>
                  <option value="Health" class="form-select-option">Health</option>
                  <option value="Lifestyle" class="form-select-option">Lifestyle</option>
                  <option value="Food" class="form-select-option">Food</option>
                </select>
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="tanggalUpload">Tanggal Upload</label>
                <input class="form-control" type="date" name="tanggalUpload" id="tanggalUpload" required>
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="tanggalEdit">Tanggal Edit</label>
                <input class="form-control" type="date" name="tanggalEdit" id="tanggalEdit" required>
              </div>
              <div class="col-lg-6 input-container">
                <label class="form-label" for="jamUpload">Jam Upload</label>
                <input class="form-control" type="time" name="jamUpload" id="jamUpload" required>
              </div>
              <div class="col-lg-12 input-container">
                <label class="form-label" for="content">Isi Berita</label>
                <textarea name="content" id="content" rows="5" class="form-control insert-content" required></textarea>
              </div>
              <input type="submit" name="upload" class="btn btn-primary float-right">Upload</input>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</body>

</html>