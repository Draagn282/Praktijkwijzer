
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

	<main>
		
    <form id="loginform" action="php/login.php" method="post">
      <?php
        if(isset($_GET['error'])) {
          if($_GET['error'] == "email") { ?>
            <b id="error">Email kan niet gevonden worden.</b>
          <?php } else if($_GET['error'] == "password") { ?>
            <b id="error">Het wachtwoord klopt niet.</b>
          <?php }
        }
      ?>

      <label for="username">Email:</label>
      <input class="textbox" type="email" name="email" required>

      <label for="password"> Wachtwoord:</label>
      <input class="textbox" type="password" name="password" required>

      <input class="form-button" type="submit" name="login" value="Inloggen"/>
      <a href="registreer.php">Registreren</a>
    </form>

	</main>
    <?php include_once("../includes/footer.php"); ?>


</body>
</html>
