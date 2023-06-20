
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-foot.css">
</head>
<?php include_once("../includes/pages-header.php"); 
?>
<body>
 
  <main class="main_login">
    <form class="loginform" id="loginform" action="php/login.php" method="post">
      <?php
        if(isset($_GET['error'])) {
          if($_GET['error'] == "email") { ?>
            <b id="error">Email kan niet gevonden worden.</b>
          <?php } else if($_GET['error'] == "password") { ?>
            <b id="error">Het wachtwoord klopt niet.</b>
          <?php }
        }
      ?>

      <h3 for="username">Email:</h3>
      <input class="textbox" type="email" name="email" required>

      <h3 for="password"> Wachtwoord:</h3>
      <input class="textbox" type="password" name="password" required>

      <input class="formbold-btn" type="submit" name="login" value="Inloggen"/>
      <a href="registreer.php">Registreren</a>
    </form>
  </main>

    <?php include_once("../includes/footer.php"); ?>


</body>
</html>
