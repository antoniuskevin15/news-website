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
    }

    echo "<script>
            const confirmDelete = confirm('Apakah anda yakin ingin menghapus berita ini?');
            if(!confirmDelete) {
                alert('Berita Batal Dihapus!');
                document.location.href = '?view=dashboard';
            }
          </script>";
    
    $idBerita = $_GET['id'];
    $result = $conn->query("DELETE FROM likelist WHERE idBerita = '$idBerita'");
    $deleteComment = $conn->query("DELETE FROM komentar WHERE IDBerita = '$idBerita'");
    $deleteBerita = $conn->query("DELETE FROM berita WHERE id = '$idBerita'");
    var_dump($conn->error);

    if($result) {
        echo "<script>
                alert('Berita Berhasil Dihapus!');
                document.location.href = '?view=dashboard';
              </script>";
    } 
?>