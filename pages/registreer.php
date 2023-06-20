    
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
		
    <form class="loginform" id="registerform" action="php/register.php" method="post">
      <label for="username">Volledige naam:</label>
      <input class="textbox" type="text" name="naam" required>

      <label for="username">Email:</label>
      <input class="textbox" type="email" name="email" required>

      <label for="password"> Wachtwoord:</label>
      <input class="textbox" id="pass1" type="password" name="password" required>

      <label for="password"> Wachtwoord herhalen:</label>
      <input class="textbox" id="pass2" type="password" name="password-repeat" required>

      <input class="formbold-btn" id="reg" type="submit" name="register" value="Registreren"/>
      <a href="login.php">Inloggen</a>
    </form>

	</main>
    <?php include_once("../includes/footer.php"); ?>


</body>
</html>
