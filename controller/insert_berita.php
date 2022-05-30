<?php 
  session_start();
  include "include/db_connect.php";
  if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 'admin') {
      $id = $_SESSION['id'];
      $user = mysqli_query($conn, "SELECT * FROM users WHERE `id` = '$id'");
      
      if(mysqli_num_rows($user) > 0) {
          $account = mysqli_fetch_assoc($user);
      } else {
        session_unset();
        $_SESSION = [];
        session_destroy();
      }
  } else {
    echo "<script>
              alert('Access Denied! Only Admin Can Access This Page!');
              document.location.href = '?view=home';
          </script>";
    exit;
  }

  if(isset($_POST['upload'])) {
    include "include/db_connect.php";
    $idBaru = substr($_POST['idBerita'],0 , 5);
    $penulis = $_POST['penulis'];
    $judul = $_POST['judul'];
    $linkImage = $_POST['linkImage'];
    $source = $_POST['sourceBerita'];
    $kategori = $_POST['kategori'];
    $tanggalUpload = $_POST['tanggalUpload'];
    $tanggalEdit = $_POST['tanggalEdit'];
    $jamUpload = $_POST['jamUpload'];
    $content = $_POST['content'];
    $thumbnail = $content;

    $statement = $conn->prepare("INSERT INTO berita VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $statement->bind_param("sssssssssss", $idBaru, $judul, $penulis, $tanggalUpload, $content, $linkImage, $thumbnail, $kategori, $jamUpload, $tanggalEdit, $source);
    $statement->execute();

    // $conn->query("INSERT INTO berita VALUES('$idBaru', '$judul', '$penulis', '$tanggalUpload', '$content', '$linkImage', '$thumbnail', '$kategori', '$jamUpload', '$tanggalEdit', '$source')");

    if($conn->affected_rows > 0) {
      echo "
        <script>
          alert('Berita berhasil ditambahkan!');
          document.location.href = '?view=berita&id={$idBaru}';
        </script>
      ";
    } else {
      echo "
        <script>alert('Berita gagal ditambahkan! -{$conn->error}-');</script>
      ";
    }
  }

  include "view/insert_berita.php";
?>