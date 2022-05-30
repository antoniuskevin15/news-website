<?php 
  session_start();
  include "include/db_connect.php";
  if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
      
      $id = $_SESSION['id'];
      $user = mysqli_query($conn, "SELECT * FROM users WHERE `id` = '$id'");
      
      if(mysqli_num_rows($user) > 0) {
          $account = mysqli_fetch_assoc($user);
      } else {
          session_unset();
          $_SESSION = [];
          session_destroy();
      }
  }

  $idBerita = $_GET['id'];
  $result = $conn->query("SELECT * FROM berita WHERE id = '$idBerita'");
  $berita = $result->fetch_assoc();

  $kumpulanBeritaPerKategori = [];
  $kategoriBerita = $idBerita[0];
  $result = $conn->query("SELECT * FROM berita WHERE id LIKE '$kategoriBerita%'");

  foreach($result as $news) {
    $kumpulanBeritaPerKategori[] = $news;
  }

  $komentar = [];
  $result = $conn->query("SELECT * FROM komentar WHERE IDBerita = '$idBerita'");
  
  foreach($result as $comment) {
    $komentar[] = $comment;
    // print_r($comment);
  }

  if(isset($_GET['target'])) {
    if($_SESSION['login']) {
      $liked = 0;
      $target = $_GET['target'];
      $result = $conn->query("SELECT * FROM likelist WHERE idKomentar = '$target'");

      
      foreach($result as $like) {
        if($account['username'] == $like['username']) {
          $liked = 1;
        }
      }

      $username = $account['username'];
      if($liked == 1) {
        $conn->query("DELETE FROM likelist WHERE username = '$username' AND idKomentar = '$target'");
      } else {
        $conn->query("INSERT INTO likelist VALUES('$idBerita', '$username', '$target')");
      }

      echo "<script>document.location.href = '?view=berita&id={$idBerita}'</script>";
    } else {
      echo "<script>document.location.href = '?view=login'</script>";
    }
  }

  if(isset($_POST['submitComment'])) {
    if($_SESSION['login']) {
      $comment = $_POST['comment'];
      $username = $account['username'];
      $conn->query("INSERT INTO komentar VALUES('$idBerita', '$comment', NOW(), null, '$username')");
      echo "<script>document.location.href = '?view=berita&id={$idBerita}'</script>";
    } else {
      echo "<script>document.location.href = '?view=login'</script>";
    }
  }

  include "view/header.php";
  include "view/berita.php";
?>