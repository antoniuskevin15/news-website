<?php
    require "controller/functions.php";
    
    if( isset($_POST["submit"]) ) {
        if(strcmp($_POST['password'], $_POST['konfirmasiPassword']) != 0) {
            echo "<script>
                alert('Password tidak match');
                document.location.href='?view=register';
            </script>";
            die;
        }
        $namaDepan = $_POST["namaDepan"];
        $namaBelakang = $_POST["namaBelakang"];
        $tanggalLahir = $_POST["tanggalLahir"];
        $jenisKelamin = $_POST["jenisKelamin"];
        $email = $_POST["email"];
        $username = $_POST["userName"];
        $id = uniqid(''); 
        $type = 'user';
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $gambar = upload();

        if($gambar === false) {
            echo "<script>
                alert(\"Mahasiswa Gagal Ditambahkan!\");
            </script>";
            echo "<script>
                document.location.href='?view=register';
            </script>";
            die;
        } 

        include "include/db_connect.php";

        $statement = $conn->prepare("INSERT INTO `users`(`nama_depan`, `nama_belakang`, `tanggal_lahir`, `jenis_kelamin`, `email`, `password`, `foto_profil`, `type`, `id`, `username`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $statement->bind_param("ssssssssss", $namaDepan, $namaBelakang, $tanggalLahir, $jenisKelamin, $email, $password, $gambar, $type, $id, $username);
        $statement->execute();

        if($conn->affected_rows > 0) {
            move_uploaded_file($_FILES["gambar"]["tmp_name"], "img/{$gambar}");
            echo "<script>
                    alert('user berhasil ditambahkan');
                    document.location.href = '?view=login';
                  </script>";
        } else {
            echo $conn->error;
            echo "<script>alert('gagal register')</script>";
        }
    }

    include "view/register.php";
?>