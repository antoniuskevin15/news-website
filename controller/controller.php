<?php
  if(isset($_GET["view"])) {
    if(strcmp($_GET["view"], "home") == 0) include "controller/home.php";
    else if(strcmp($_GET["view"], "kategori") == 0) include "controller/kategori.php";
    else if(strcmp($_GET["view"], "berita") == 0) include "controller/berita.php";
    else if(strcmp($_GET["view"], "login") == 0) include "controller/login.php";
    else if(strcmp($_GET["view"], "register") == 0) include "controller/register.php";
    else if(strcmp($_GET["view"], "forgotPass") == 0) include "controller/forgotPass.php";
    else if(strcmp($_GET["view"], "logout") == 0) include "controller/logout.php";
    else if(strcmp($_GET["view"], "insert_berita") == 0) include "controller/insert_berita.php";
    else if(strcmp($_GET["view"], "edit") == 0) include "controller/edit.php";
    else if(strcmp($_GET["view"], "delete") == 0) include "controller/delete.php";
    else if(strcmp($_GET["view"], "dashboard") == 0) include "controller/admin.php";
    else echo "<h1>404 NOT FOUND!</h1>";
  } else include "controller/home.php";
?>