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

  include "view/header.php";
  include "view/admin.php";
?>