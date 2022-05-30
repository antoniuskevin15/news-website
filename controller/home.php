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


    $data = "SELECT id,judul,penulis,DATE_FORMAT(tanggalUpload, '%W, %D %M %Y') 'tanggalUpload', content, imgresource, thumbnail, kategori, jamUpload, DATE_FORMAT(lastedited, '%W, %M %e %Y')'lastedited', resourceBerita FROM berita ORDER BY RAND() LIMIT 10";
    $hasil = $conn->query($data);

    while ($d = mysqli_fetch_assoc($hasil)){
        $result[] = $d;
    }
    include "view/header.php";
    include "view/home.php";
?>