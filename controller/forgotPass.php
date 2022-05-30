<?php 
    $conn = mysqli_connect("localhost", "root", "", "secondnewsmedia");

    if(isset($_POST['submit'])) {
        if(strcmp($_POST['password'], $_POST['confirmPassword']) == 0) {
            $email = $_POST['email'];
            $username = $_POST['username'];

            $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            mysqli_query($conn, "UPDATE users SET `password` = '$newPassword' WHERE `email` = '$email' AND `username` = '$username'");

            if(mysqli_affected_rows($conn) > 0) {
                echo "<script>alert('Password berhasil diupdate!')</script>";
                echo "<script>document.location.href='?view=login'</script>";
                exit;
            } else {
                echo "<script>alert('Password gagal diupdate...')</script>";
            }
        }

    }


    include "view/forgotPass.php";
?>