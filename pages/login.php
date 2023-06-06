
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
<?php include_once("../includes/header.php"); 
?>
<body>

	<main>
		
    <form class="loginform" action="/action_page.php">
    <label for="email">email:</label><br>
    <input type="text" id="fname" name="email" value="email"><br>
    <label for="wachtwoord">wachtwoord:</label><br>
    <input type="password" id="wachtwoord" name="wachtwoord" value="wachtwoord"><br><br>
    <input type="submit" value="Submit">
    </form> 

	</main>
    <?php include_once("../includes/footer.php"); ?>


</body>
</html>
