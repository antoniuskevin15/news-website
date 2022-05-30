<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include "include/bootstrapJsGlobal.php"; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="assets/css/navbarHome.css">
  <link rel="stylesheet" href="assets/css/adminPage.css">
  <link rel="icon" href="assets/images/browser-icon.png" type="image/png">
  <title>News — Second News Media</title>
</head>

<body>
  <?php 
    include "include/db_connect.php";

    $result = $conn->query("SELECT * FROM berita");
    $berita = $result->fetch_assoc();
  ?>
  <div class="container table-container">
    <div class="col-lg-12 col-md-12 mb-4 btn-wrapper">
      <a href="?view=insert_berita" class="btn btn-primary btn-insert">Insert Berita</a>
    </div>
    <table id="newsTable" class="table table-bordered table-striped display nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Penulis</th>
          <th>Konten</th>
          <th>Tanggal Upload</th>
          <th>Gambar (Link)</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $result = $conn->query("SELECT * FROM berita");
          while($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td id=\"id_berita\">{$row['id']}</td>
                <td id=\"judul_berita\">{$row['judul']}</td>
                <td id=\"kategori_berita\">{$row['kategori']}</td>
                <td id=\"penulis_berita\">{$row['penulis']}</td>
                <td id=\"content_berita\">{$row['content']}</td>
                <td id=\"tglupload_berita\">{$row['tanggalUpload']}</td>
                <td>
                  <a id=\"source_gambar\" class=\"image-link\" href=\"{$row['imgresource']}\">{$row['imgresource']}</a>
                </td>
                <td id=\"action-button\">
                  <div class=\"col-lg-6 col-md-6 action-button-container\">
                    <a href=\"?view=edit&id={$row['id']}\" class=\"btn btn-warning btn-action\">Edit Berita</a>
                    <a href=\"?view=delete&id={$row['id']}\" class=\"btn btn-danger btn-action\">Hapus Berita</a>
                  </div>
                </td>
              </tr>
            ";
          }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#newsTable').DataTable({
      "scrollX": true
    });
  });

  function sliceLongText() {
    const contentElement = document.querySelectorAll("#content_berita");
    contentElement.forEach(el => {
      const newContentText = el.textContent.slice(0, 100);
      el.textContent = newContentText + "...";
    })

    const linkElement = document.querySelectorAll('#source_gambar');
    linkElement.forEach(el => {
      const newContentText = el.textContent.slice(0, 50);
      el.textContent = newContentText + "...";
    })
  }

  sliceLongText();
  </script>
</body>

</html>