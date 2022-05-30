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
    }

    $idBerita = $_GET['id'];
    $result = $conn->query("SELECT * FROM berita WHERE id = '$idBerita'");
    $berita = $result->fetch_assoc();

    if(isset($_POST['upload'])){
        $update = $conn->prepare("UPDATE berita SET id= ?, judul= ?, penulis= ?, tanggalUpload= ?, content= ?, imgresource= ?, thumbnail= ?, kategori= ?, jamUpload= ?, lastedited= ?, resourceBerita= ? WHERE id= ?");
        $update->bind_param("ssssssssssss", $_POST['idBerita'], $_POST['judul'], $_POST['penulis'], $_POST['tanggalUpload'], $_POST['content'], $_POST['linkImage'], $_POST['thumbnail'], $_POST['kategori'], $_POST['jamUpload'], $_POST['tanggalEdit'], $_POST['sourceBerita'], $idBerita);
        $update->execute();
    
        echo "<script>
        alert('News succesfully updated!'); 
        document.location.href = '?view=dashboard'
        </script>";
      }
  
    include "view/edit.php";
?>