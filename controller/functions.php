<?php
    function upload() {
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];

        $validExtension = ["jpg", "png", "jpeg"];
        $ext = explode(".", $namaFile);
        $ext = strtolower($ext[count($ext)-1]);

        if($error == 4) {
            echo "<script>
                alert(\"Please upload a file first!\");
            </script>";
            return false;
        } else if(!in_array($ext, $validExtension)) {
            echo "<script>
                alert(\"Error, please upload a picture!\");
            </script>";
            return false;
        } else if($ukuranFile > 5000000) {
            echo "<script>
                alert(\"Your file size is way too big!\");
            </script>";
            return false;
        }

        return uniqid('foto-profil').'.'.$ext;
    }
?>