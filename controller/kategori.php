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

    if($_GET["kategori"] == 1) $category = 'Nasional';
    else if($_GET["kategori"] == 2) $category = 'Internasional';
    else if($_GET["kategori"] == 3) $category = 'Politik';
    else if($_GET["kategori"] == 4) $category = 'Ekonomi';
    else if($_GET["kategori"] == 5) $category = 'Edukasi';
    else if($_GET["kategori"] == 6) $category = 'Teknologi';
    else if($_GET["kategori"] == 7) $category = 'Sports';
    else if($_GET["kategori"] == 8) $category = 'Health';
    else if($_GET["kategori"] == 9) $category = 'Lifestyle';
    else if($_GET["kategori"] == 10) $category = 'Food';

    $data = "SELECT id,judul,penulis,DATE_FORMAT(tanggalUpload, '%W, %D %M %Y') 'tanggalUpload', content, imgresource, thumbnail, kategori, jamUpload, DATE_FORMAT(lastedited, '%W, %M %e %Y')'lastedited', resourceBerita FROM berita WHERE kategori='".$category."'";
    $hasil = $conn->query($data);

    while ($d = mysqli_fetch_assoc($hasil)){
        $result[] = $d;
    }
    include "view/header.php";
    include "view/kategori.php";
?>